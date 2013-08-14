<?php
include 'lib/bones.php';

get('/', function($app) {
	$app->set('message', 'Welcome Back!');
	$app->render('home');
});

get('/signup', function($app) {
	$app->render('signup');
});

post('/signup', function($app) {
	$user = new User();
	$user->full_name = $app->form('full_name');
	$user->email = $app->form('email');
	$user->company = $app->form('company');
	$user->signup($app->form('username'), $app->form('password'));
	
	$app->set('success', 'Thanks for Signing Up ' . $user->full_name . '!');
	$app->render('login');
});

get('/login', function($app) {
	$app->render('login');
});

post('/login', function($app) {
		$user = new User();
		$user->name = $app->form('username');
		$user->login($app->form('password'));	
	if (User::is_authenticated()) {
		$app->set('success', 'Welcome.');
		$app->render('welcome');
	} else {
		$app->set('error', 'Sorry incorrect details.');
		$app->render('login');
	}
});

get('/logout', function($app) {
  User::logout();
  $app->redirect('/');
});

function get_user_profile($app) {
  $app->set('user', User::get_by_username($app->request('username')));
	$app->set('is_current_user', ($app->request('username') == User::current_user() ? true : false));
	$app->set('posts', Post::get_posts_by_user($app->request('username'), ($app->request('skip') ? $app->request('skip') : 0)));
	$app->set('post_count', Post::get_post_count_by_user($app->request('username')));
}

function get_user_post($app) {
  $app->set('user', User::get_by_username($app->request('username')));
	$app->set('is_current_user', ($app->request('username') == User::current_user() ? true : false));
	$app->set('posts', Post::get_posts_by_user($app->request('username'), ($app->request('skip') ? $app->request('skip') : 0)));
	}

get('/user/:username', function($app) {
  get_user_profile($app);
  $app->render('user/profile');
});

get('/create/:username', function($app) {
  get_user_profile($app);
  $app->render('create/new-client');
});

get('/user/:username/posts/:id', function($app) {
  get_user_profile($app);
  $app->render('user/posts/edit');
});

get('/user/:username/:skip', function($app) {
  get_user_profile($app);
  $app->render('user/_posts', false);
});

post('/post', function($app) {
	if (User::is_authenticated()) {
		$post = new Post();
		$post->clientname = $app->form('clientname');
		$post->maincontact = $app->form('maincontact');
		$post->contactemail = $app->form('contactemail');
		$post->contacttel = $app->form('contacttel');
		$post->altcontact = $app->form('altcontact');
		$post->cms = $app->form('cms');
		$post->cmsversion = $app->form('cmsversion');
		$post->startdate = $app->form('fulldate');
		$post->hours = $app->form('hours');
		$post->create();
		$app->set('success', 'The clients details have been stored');
		$app->redirect('/user/' . User::current_user());
	} else {
		$app->set('error', 'You must be logged in to do that.');
		$app->render('login');
	}
});

get('/post/delete/:id/:rev', function($app) {
	$post = new Post();
	$post->_id = $app->request('id');
	$post->_rev = $app->request('rev');
	$post->delete();
	$app->set('success', 'Your post has been deleted');
	$app->redirect('/user/' . User::current_user());
});

get('/post/update/:id/:rev', function($app) {
	$post = new Post();
	$post->_id = $app->request('id');
	$post->_rev = $app->request('rev');
	$post->update();
	$app->set('success', 'Your post has been updated');
	$app->redirect('/user/' . User::current_user());
});


resolve();