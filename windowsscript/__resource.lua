resource_manifest_version '44febabe-d386-4d18-afbe-5e627f4af937'

description 'XLIFE'

version '1.1.0'

ui_page 'html/index.html'

client_scripts {
	'@es_extended/locale.lua',
	'locales/fr.lua',
	'config.lua',
	'client/main.lua'
}

files {
	'html/index.html',
	'html/style.css',
	'html/app.js'
}