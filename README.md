# Ademidentity

 Padrão de estilos Ademicon

## Ademidentity via CDN jsDelivr

Sem precisar de download use nossa lib com [https://www.jsdelivr.com/](jsDelivr)

+ Estilos css

  👉 [https://cdn.jsdelivr.net/gh/mktademicon/ademidentity@latest/css/theme.css](https://cdn.jsdelivr.net/gh/mktademicon/ademidentity@latest/css/theme.css)

+ JavaScript necessário para alguns recursos
  
  👉 [https://cdn.jsdelivr.net/gh/mktademicon/ademidentity@latest/js/scripts.js](https://cdn.jsdelivr.net/gh/mktademicon/ademidentity@latest/js/scripts.js)
  
+ JQuery 3.5.1 compilado e minimizado necessário para alguns recursos
  
  👉 [https://cdn.jsdelivr.net/gh/mktademicon/ademidentity@latest/js/library.js](https://cdn.jsdelivr.net/gh/mktademicon/ademidentity@latest/js/library.js)

Para usar basta colar os links no `head` de sua `index`. Na raiz do projeto há um exemplo demostrativo.

  ```html
    <!-- Estilos css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mktademicon/ademidentity@latest/css/theme.css" />
    
    <!-- JavaScript necessário para alguns recursos -->
    <script src="https://cdn.jsdelivr.net/gh/mktademicon/ademidentity@latest/js/scripts.js" type="text/javascript"></script>
    
    <!-- JQuery 3.5.1 compilado e minimizado necessário para alguns recursos -->
    <script src="https://cdn.jsdelivr.net/gh/mktademicon/ademidentity@latest/js/library.js" type="text/javascript"></script>
    
    <!-- Font Awesome necessário para alguns recursos -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  ```

## Ademidentity via npm ou yarn

Para aplicações em node use nossa lib com [gerenciadores de pacotes](https://www.npmjs.com/package/ademidentity)

+ npm

  ```bash
    npm install ademidentity
  ```

+ yarn

  ```bash
    yarn add ademidentity
  ```

## Estrutura de arquivos e pastas

```bash
ademidentity/
├── css/
│   ├── globals.css
│   ├── globals.css.map
│   ├── theme.css
│   └── theme.css.map
├── js/
│   ├── library.js
│   └── script.js
├── scss/
│   ├── _animate.scss
│   ├── _buttons.scss
│   ├── _columns.scss
│   ├── _flex.scss
│   ├── _form.scss
│   ├── _mobile.scss
│   ├── _spacing.scss
│   ├── globals.scss
│   └── theme.scss
├── index.html
└── READEME.md
```
