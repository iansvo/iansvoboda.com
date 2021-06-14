(function() {
	document.addEventListener('DOMContentLoaded', function() {
		toggleTheme();	
		updateTheme();
		headerMenuToggle();
	});
	
	function toggleTheme() {
		var $buttons = document.querySelectorAll('button[data-setting="color-scheme"]'); 
		
		Array.from($buttons).forEach(function($button) {			
			$button.addEventListener('click', function() {
				var currentTheme = $button.getAttribute('data-setting-value'),
						newTheme     = currentTheme === 'dark' ? 'light' : 'dark';
				
				// Update local storage
				localStorage.setItem('color-scheme', newTheme);
				
				console.log('set new theme: ' + newTheme);
				
				// Update site theme
				updateTheme();
				
			});
		});
		
	}
	
	function updateTheme() {
		var $buttons			= document.querySelectorAll('button[data-setting="color-scheme"]'),
				darkModePref	= matchMedia('(prefers-color-scheme: dark)').matches,
				cachedSetting	= localStorage.getItem('color-scheme'),
				newTheme		  = cachedSetting ? cachedSetting : darkModePref ? 'dark' : 'light',
				prevTheme     = newTheme === 'dark' ? 'light' : 'dark'; 
				
		Array.from($buttons).forEach(function($button) {			
			$button.innerText = `Enable ${prevTheme} Mode`;
			$button.setAttribute('data-setting-value', newTheme);
		});		
		
		console.log('update new theme: ' + newTheme);
		
		document.documentElement.classList.remove(`${prevTheme}-mode`);
		document.documentElement.classList.add(`${newTheme}-mode`);
	}
	
	function headerMenuToggle() {
		var $toggle   = document.querySelector('.c-header_toggle'),
				$checkbox = document.getElementById('header-menu-checkbox'); 
		
		$toggle.addEventListener('click', function() {
			var isExpanded = $toggle.getAttribute('aria-expanded') == 'true';
			
			$toggle.setAttribute('aria-pressed', !isExpanded);
			$toggle.setAttribute('aria-expanded', !isExpanded);
			$checkbox.checked = !isExpanded;

		});
	}
})();