// ----------------------------------------------------------------------------
// markItUp!
// ----------------------------------------------------------------------------
// Copyright (C) 2011 Jay Salvat
// http://markitup.jaysalvat.com/
// ----------------------------------------------------------------------------
// Html tags
// http://en.wikipedia.org/wiki/html
// ----------------------------------------------------------------------------
// Basic set. Feel free to add more tags
// ----------------------------------------------------------------------------
var mySettings = { 
	onTab:    		{keepDefault:false, replaceWith:'    '},
	markupSet:  [
		{name:'Span', key:'S', openWith:'[span]•', closeWith:'[/span]'  },
		{name:'Br', key:'Br', openWith:'[br]', closeWith:'' },
		{name:'Button', key:'Btn', openWith:'[button]', closeWith:'[/button]' },
	]
}
