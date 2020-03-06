const aboutButton = document.querySelector('#about-button');
const helpButton = document.querySelector('#help-button');
const storyButton = document.querySelector('#story-button');

const areaAbout = document.querySelector('#about');
const areaHelp = document.querySelector('#help');
const areaStory = document.querySelector('#story');
	


aboutButton.addEventListener('click', function(){
	if (areaHelp.classList.contains('show')){
		areaHelp.classList.remove('show');
	};
	
	if (areaStory.classList.contains('show')){
		areaStory.classList.remove('show');
	};
});

helpButton.addEventListener('click', function(){
	if (areaAbout.classList.contains('show')){
		areaAbout.classList.remove('show');
	};
	
	if (areaStory.classList.contains('show')){
		areaStory.classList.remove('show');
	};
});

storyButton.addEventListener('click', function(){
	if (areaAbout.classList.contains('show')){
		areaAbout.classList.remove('show');
	};
	
	if (areaHelp.classList.contains('show')){
		areaHelp.classList.remove('show');
	};
});