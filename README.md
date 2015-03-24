flatfilecms
===========

Multi-language MVC framework/CMS, basic but clean, for multi language organized static (but programatic) content.

## Features

- automatic menu
- language links
- same page in other languages links

## Logic

- the languages are defined in language/structure/languages.csv , which is then used to generate the languages menu.
- the page structure is defined in language/structure/pages.csv , which is then used to generate the pages menu. Each page has its own controller in controller/, defined by having the same file name as the alias defined in the .csv file.
