/*$(function()
{
	var inputWrapper = $('<div/>')
	.addClass('inputWrapper')
	.css({
		'position' : 'absolute',
		'top' : 0,
		'left' : 0,
		'height' : '100%',
		'width' : '100%',
		'padding' : '30px',
		'font-size' : '44px',
		'background' : 'rgba(255, 255, 255, 0.88)'
	})
	.attr('contenteditable', 'true')
	.on('keyup', function(e)
	{
		var $this = $(this);

		if(e.keyCode == 13)
		{
			$('input[name=email]').val($this.text());
			$this.remove();

			$('form').submit();
		}
		else if(e.keyCode == 27)
		{
			$this.hide();
		}

		$('input[name=email]').val($this.text());
	})
	.hide()
	.appendTo('body');

	$('input[name=email]').on('focus', function()
	{
		inputWrapper.css('top', $(this).offset().top - inputWrapper.height() / 2).show(function()
		{
			inputWrapper.focus();
		});
	});
});*/
$(function()
{
	$('#updated-at')
	.css('border-bottom', '1px dashed #111')
	.tooltip();
});