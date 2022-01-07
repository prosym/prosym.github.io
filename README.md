プログラミング・シンポジウム Web サイト
========================================

https://prosym.org/

[GitHub Pages and Jekyll](https://docs.github.com/ja/pages/setting-up-a-github-pages-site-with-jekyll/about-github-pages-and-jekyll) で管理しています。

Web 担当の方へ
---------------

### 手元での確認

* 定期的に [GitHub Pages の dependency versions](https://pages.github.com/versions/) を確認して `Gemfile` をアップデートしてください。
  * 想定する Ruby のバージョンもここに書いてあります。

#### Ruby のインストール・アップデート

好きなインストール方法を使ってください。

##### rbenv の場合

https://github.com/rbenv/rbenv

#### 手元での Jekyll の起動

```
$ bundle config set path 'vendor/bundle'  # 初回のみ; 必要と感じる人は
$ bundle install  # 初回のみ
$ env LANG=ja_JP.UTF-8 bundle exec jekyll serve
```

#### `Gemfile` のアップデート

`Gemfile` を [GitHub Pages の dependency versions](https://pages.github.com/versions/) に沿って編集してから :

```
$ bundle update
$ bundle install
```
