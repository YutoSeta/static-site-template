# laravel-mixを使って静的サイトをつくるためのテンプレート

##使い方
1. 'npm install'
2. webpack.mix.jsを編集
3. 'npx mix watch'

##ディレクトリ構成
- index.html（app.cssとapp.jsをデフォルトで読み込む）
- resources
    - styles
        - _app.css（コンパイル前）（デフォルトでtailwindcssを採用）
        - app.css（コンパイル後）
    - scripts
        - _app.js（コンパイル前）
        - app.js（コンパイル後）
- webpack.mix.js（各種ファイルのコンパイル設定）