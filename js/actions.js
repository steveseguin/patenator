function updateEditor(){
        var images = document.querySelectorAll('.editor img');
        for (i in images){
                images[i].setAttribute("draggable", "true");
        }
}

window.onload=function(){
				function makeWYSIWYG(editor)
				{
					//If the DOM element we want to edit exists
					if(editor)
					{
						//We create the buttons container
						var buttons_container = document.createElement('div');
						
						//We define some properties to it...
						buttons_container.style.textAlign='center';
						buttons_container.style.marginTop='5px';
						buttons_container.className='makeWYSIWYG_buttons_container';
						//We create the buttons inside the container
						buttons_container.innerHTML=''+
                                                                '<button class="makeWYSIWYG_viewHTML">View HTML</button>'+
								'<button data-tag="bold"><b>B</b></button>'+
								'<button data-tag="italic"><em>I</em></button>'+
								'<button data-tag="underline"><ins>U</ins></button>'+
								'<button data-tag="strikeThrough"><del>S</del></button>'+
								'<button data-tag="insertUnorderedList">&bull; ul</button>'+
								'<button data-tag="insertOrderedList">1. ol</button>'+
								'<button data-tag="createLink"><ins style="color: blue;">URL</ins></button>'+
								'<button data-tag="insertImage">Img</button>'+
								'<button data-value="h1" data-tag="heading">H1</button>'+
								'<button data-value="h2" data-tag="heading">H2</button>'+
								'<button data-tag="removeFormat">Remove format</button>';
							
						//We insert the buttons after the editor
						var parent = editor.parentNode;

						if(parent.lastchild == editor)
						{
							parent.appendChild(buttons_container);
						}
						else
						{
							parent.insertBefore(buttons_container, editor.nextSibling);
						}
				
						//Click on the "View HTML" button
						buttons_container.querySelector('.makeWYSIWYG_viewHTML').addEventListener('click',function(e)
						{
							alert(editor.innerHTML);
							e.preventDefault();
						},false);
						
						//Get the format buttons
						var buttons = buttons_container.querySelectorAll('button[data-tag]');
						
						//For each of them...
						for(var i=0, l=buttons.length; i<l; i++)
						{
							//We bind the click event
							buttons[i].addEventListener('click',function(e)
							{
								var tag = this.getAttribute('data-tag');
								switch(tag)
								{
									case 'createLink':
										var link = prompt('Please specify the link.');
										if(link)
										{
											document.execCommand('createLink', false, link);
										}
									break;
									
									case 'insertImage':
										var src = prompt('Please specify the link of the image.');
										if(src)
										{
											document.execCommand('insertImage', false, src);
										}
									break;
									
									case 'heading':
											//The browser doesn't support "heading" command, we use an alternative
											document.execCommand('formatBlock', false, '<'+this.getAttribute('data-value')+'>');
									break;
									
									default:
										document.execCommand(tag, false, this.getAttribute('data-value'));
								}
								e.preventDefault();
							});
						}
					}			
					return editor;
				};
				
				makeWYSIWYG(document.getElementById('editor'));
};

