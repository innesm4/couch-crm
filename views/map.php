function(doc) {
	if (doc.type == 'post')
  emit(doc.company, doc);
}