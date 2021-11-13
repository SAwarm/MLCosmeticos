function createCard(res, desc){
	var CARDS = $(".cards");

	var card = templateOf("template_card", CARDS);

	var $foto = card.find(".foto");
	$foto[0].src = "/res/img/" + res;

	var $desc = card.find(".desc");
	$desc.text(desc);

}

function templateOf(templateId, target){
	var $template = $("#" + templateId);
	var template = $template[0];
	var clone = $(template.cloneNode(true));
	if(target) target.append(clone);
	clone.removeClass("template");
	return clone;
}