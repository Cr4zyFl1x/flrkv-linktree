<?php
if (isset($_GET['h'])) {
	$l = [
		'dGk4lOPVqRVR' => 'dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZVcTZocGh5c3psckVqcUFJYU1HUmJLZjh4M2tBVEhzR2hYN2U='
	];
	
	if(array_key_exists($_GET['h'], $l)) {
		header('Location: https://proxy.sarpex.eu/?hash=' . $l[$_GET['h']]);
	} else {
		header('Location: https://proxy.sarpex.eu/?hash=' . $_GET['h']);
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- // META DATA // -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- // TITLE // -->
		<title>flrkv.eu | LinkTree</title>
		
		<!-- // ASSETS // -->
		<link rel="icon" href="https://cdn.kleine-vorholt.eu/main/images/flrkv/logo/logo.png" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
		<link href="_assets/css/main.css?v=415411" rel="stylesheet" />
		
		<!-- // LOADER // -->
		<style>		
			#loader {
				transition: all .3s ease-in-out;
				opacity: 1;
				visibility: visible;
				position: fixed;
				display: block;
				height: 100vh;
				width: 100%;
				margin: 0px;
				background: #fff;
				z-index: 90000
			}

			#loader.fadeOut {
				opacity: 0;
				visibility: hidden
			}

			.spinner {
				width: 40px;
				height: 40px;
				position: absolute;
				top: calc(50% - 20px);
				left: calc(50% - 20px);
				background-color: #333;
				border-radius: 100%;
				-webkit-animation: sk-scaleout 1s infinite ease-in-out;
				animation: sk-scaleout 1s infinite ease-in-out
			}

			@-webkit-keyframes sk-scaleout {
				0% {
					-webkit-transform: scale(0)
				}
				100% {
					-webkit-transform: scale(1);
					opacity: 0
				}
			}

			@keyframes sk-scaleout {
				0% {
					-webkit-transform: scale(0);
					transform: scale(0)
				}
				100% {
					-webkit-transform: scale(1);
					transform: scale(1);
					opacity: 0
				}
			}
		</style>
		
		<!-- // MATOMO // -->
		<script type="text/javascript">var _paq = window._paq = window._paq || [];_paq.push(["setDocumentTitle", document.domain + "/" + document.title]);_paq.push(['trackPageView']);_paq.push(['enableLinkTracking']);(function() {var u="//analytics.kleine-vorholt.eu/";_paq.push(['setTrackerUrl', u+'matomo.php']);_paq.push(['setSiteId', '2']);var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);})();</script>
		<noscript><p><img src="//analytics.kleine-vorholt.eu/matomo.php?idsite=2&amp;rec=1" style="border:0;" alt="" /></p></noscript>
	</head>

	<body style="background-image: url('https://cdn.kleine-vorholt.eu/main/images/flrkv/bg/fiber.png')">
	
		<!-- // SITE LOADER // -->
        <div id="loader">
            <div class="spinner"></div>
        </div>
        <script>
            window.addEventListener('load', function load() {
                const loader = document.getElementById('loader');
                setTimeout(function() {
                    loader.classList.add('fadeOut');
                }, 800); // Default: 300
            });
        </script>
        
	
		<!-- // LOGO // -->
		<img class="logo" src="https://cdn.kleine-vorholt.eu/main/images/flrkv/logo/logo.png" style="height: 100px; width: 100px; margin-top: 1em" alt="logo">
		
		<!-- // LINK TREE // -->
		<div class="links">
			<div class="tree-item">
				<a class="tree-item hover-bg-white replit" href="https://proxy.sarpex.eu/?hash=dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZVcXlocGh5c3ptNDNIV1F6QlhoN1BHV2tHODVXY0ZvWlNZREN6L2M9" target="_blank">Repl.it</a>
			</div>
			<div class="tree-item">
				<a class="tree-item hover-bg-white github" href="https://proxy.sarpex.eu/?hash=dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZVcWFocGh5c3pydlp2RTl0R25lY0RzTGc1bDVlSGZ6UnJGN1JoeUZqdTJmczdpcz0=" target="_blank">GitHub</a>
			</div>
			<div class="tree-item">
				<a class="tree-item hover-bg-white twitter" href="https://proxy.sarpex.eu/?hash=dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZVcWVocGh5c3pnb09hYitqaFdpelRna3J4Tks1Zk5KeWU4QUZPRlJ1TTZQVDNsNW0=" target="_blank">Twitter</a>
			</div>
			<div class="tree-item">
				<a class="tree-item hover-bg-white spotify" href="https://proxy.sarpex.eu/?hash=dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZWYXVocGh5c3ppTVdwcFR0RkxsMWpEZDJoL1Q2eUNNaTNBRm50OUVHOWNrZzdVNWJnemQzR0FyUFBBT1RzQTYvQzF5QXJPN0NzRU5FUTlnbFVoVT0=" target="_blank">Spotify</a>
			</div>
			<div class="tree-item">
				<a class="tree-item hover-bg-white steam" href="https://proxy.sarpex.eu/?hash=dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZWSzZocGh5c3pvVGNUS2FTVHdJM2tnWHFsb2tkMk5sWGo5dTZUV0xkR3dDQm5QUkc1d3JWUDBURWppMzZVS2c9" target="_blank">Steam</a>
			</div>
			<div class="tree-item">
				<a class="tree-item hover-bg-white sarpex" href="https://proxy.sarpex.eu/?hash=dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZVYW1ocGh5c3pocFBxQkp3QnNNTFBhTEVyWWZ4ek5QYw==" target="_blank"><sub>powered by</sub> Sarpex IT Services</a>
			</div>
            <div class="tree-item">
                <a class="tree-item hover-bg-white cdn" href="https://cdn.kleine-vorholt.eu" target="_blank">Content Delivery Network</a>
            </div>
        </div>

		<!-- // OTHER LINKS // -->
		<h2>More</h2>
		<div class="channels">
			<a class="channels__item" href="https://proxy.sarpex.eu/?hash=dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZVNjZocGh5c3pzRm5PWXJxMHUzSC9SWjFmRTh3VDNCczVzUXdqZHVCREJqeG9kaXNRZz09" target="_blank">
				<img src="_assets/images/ico/www.png" alt="website" width=40 height=40>
			</a>
			<a class="channels__item" href="https://proxy.sarpex.eu/?hash=dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZVcWVocGh5c3pnb09hYitqaFdpelRna3J4Tks1Zk5KeWU4QUZPRlJ1TTZQVDNsNW0=" target="_blank">
				<img src="_assets/images/ico/twitter.png" alt="twitter" width=40 height=40>
			</a>
			<a class="channels__item" href="https://proxy.sarpex.eu/?hash=dGk4NjI5YnlZSFlmVE92K3JOZ3RJZURiSWpGdnlEcStWd3Nqa0VqRVRWZnRUWklsdFUxeGJuOGhPRjFONlJLbFRtTDYxZFQ3ZmFkbWMzZVdmSWpCbm5Ha1dxYm15amlSb0dDcHpRa0VwRXkydHFTZUNOWFd4bHV3dzZYQ3RubGZPTnlJczkvMktHZFZVYW1ocGh5c3pocFBxQkp3QnNNTFBhTEVyWWZ4ek5QYw==" target="_blank">
				<img src="_assets/images/ico/www.png" alt="website" width=40 height=40>
			</a>
		</div>
		
		<span class="app-version">v1.2.1</span>
		
		<!-- // SCRIPTS // -->
		<script>
			document.addEventListener('contextmenu', event => event.preventDefault());
		</script>
	</body>
</html>