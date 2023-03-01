[Smarty & jQuery チュートリアル](https://github.com/megumisugita0615/Smarty-jQueryTutorial)です。

## 環境

- [PHP 8.1.15 (cli)](https://www.php.net/ChangeLog-8.php)
- [Composer version 2.4.4](https://getcomposer.org/changelog/2.4.4)
- [Docker version 20.10.21, build baeda1f](https://docs.docker.com/engine/release-notes/20.10/)
- [Docker Compose version v2.13.0](https://docs.docker.com/compose/release-notes/)

## 環境構築

```
git clone https://github.com/megumisugita0615/Smarty-jQueryTutorial.git
```

```
cd Smarty-jQueryTutorial
```


```
make install
```

`http://localhost/`にアクセス

<img width="1440" alt="welcome" src="https://user-images.githubusercontent.com/106021148/221112859-6afef425-f679-4193-961b-d37c70a59c3f.png">

## 実装

### SmartyでHTMLテンプレートを出力
```
・スタイリングにはCSS(SCSS)、Bootstrap、Google Fontsを使用
・テンプレートindex.tplにその他コンポーネントのテンプレートを読み込み

templates
├── _header.tpl
├── _news.tpl
├── _welcome.tpl
└── index.tpl
```

### jQueryでテンプレートに動作を追加
```
・ウェルカムメッセージのフェードイン
・ニュース記事のタブ切り替え
```
<img width="1380" alt="welcome_and_tab" src="https://user-images.githubusercontent.com/106021148/221118714-7c995dc7-6ba1-45d0-a491-8c66b37d5f7f.png">

### javascriptでAPIを取得（[Hacker News API](https://github.com/HackerNews/API)）

タブをクリックすると記事の表示が切り替わる（[参考](https://github.com/HackerNews/API#new-top-and-best-stories)）

<img width="1439" alt="top" src="https://user-images.githubusercontent.com/106021148/222059963-fb52b89a-0ad6-43c6-9528-7d983abf6e4a.png">

<img width="1440" alt="new" src="https://user-images.githubusercontent.com/106021148/222059957-d9559a32-b6fc-49d4-8298-33022d5aa9e9.png">

<img width="1440" alt="best" src="https://user-images.githubusercontent.com/106021148/222059949-b4130270-8fbe-4aa4-ab8f-049238836580.png">
