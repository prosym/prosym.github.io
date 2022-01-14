プログラミング・シンポジウム Web サイト
========================================

https://prosym.org/

Web 担当の方へ
---------------

[GitHub Pages and Jekyll](https://docs.github.com/ja/pages/setting-up-a-github-pages-site-with-jekyll/about-github-pages-and-jekyll) で管理しています。

### 運用の基本方針

#### JavaScript はなるべく使わない

理由: 専業でやるわけではない & 数年おきに引き継ぎをする必要がある & 専門外のこともある、ので、複雑なロジックは入れたくない。

#### 外部 JavaScript ライブラリは絶対使わない

理由: 引き継いでいったときに、継続的なアップデートや脆弱性が見つかった場合の対応が即応的にできる体制を維持するのは難しい。

#### バージョン管理する

理由: 変更履歴を残せる。ちょっと実験的に変更しても確実にすぐ元に戻せるので実験しやすい。

#### 静的サイトジェネレータを使う

理由: HTML 直書きで多くのファイルのメンテナンスを続けるのは大変。そして静的サイトジェネレータなら、上記に加えて、他のプラットフォーム・サービス・ツールに移行したい、となったとき、少なくとも HTML/CSS をそのまま抜き出して持っていくことはできる。

(Wordpress などの CMS を使うと Wordpress ベッタリに依存してしまうので、あとが大変です。プラグインの継続的な更新やセキュリティ対応なども必要なので、手間も結局かかります。このサイトの用途ではあまりおすすめできません。)

#### GitHub Pages and Jekyll を使う

理由: 上記を無料で、かつ静的サイトジェネレーションの実行環境付きで提供してくれる。そして、その GitHub Pages のネイティブサポートが Jekyll だけ。

(特に Jekyll が優れているからという理由で選んだわけではないので、他に候補ができたら移行してもいいと思います。ただしその際、引き継ぎの容易性は考慮に入れたほうがいいです。)

#### なるべくドキュメントを残す

理由: 特に、「なぜこうしたのか」という情報がドキュメントとして残っていると、後任が判断をしやすくなります。

(各ディレクトリに `README.md` を残してあります。方針を変えたときはぜひ `README.md` も更新してください。)

### Jekyll の手元での動かし方

GitHub に変更内容を push すれば 1〜2 分で Web の更新はできるので、手元で Jekyll を動かす必要は必ずしもありません。が、なにかうまくいかないときや試行錯誤するときは手元で動かしたほうがやっぱり楽なので、用意しておくことをおすすめします。

#### Ruby のインストール・アップデート

好きなインストール方法を使ってください。ただし [GitHub Pages の dependency versions](https://pages.github.com/versions/) と同じバージョンの Ruby を使うのがいいと思います。

参考: [rbenv](https://github.com/rbenv/rbenv)

#### `Gemfile` からのインストール・アップデート

定期的に [GitHub Pages の dependency versions](https://pages.github.com/versions/) を確認して `Gemfile` をアップデートしてください。想定する Ruby のバージョンもここに書いてあります。

`Gemfile` を [GitHub Pages の dependency versions](https://pages.github.com/versions/) に沿って編集してから :

```
$ bundle update
$ bundle install
```

#### 手元での Jekyll の操作

##### 初回セットアップ

```
$ bundle config set path 'vendor/bundle'  # やらなくてもいい。必要と感じる人はどうぞ。
$ bundle install
```

##### localhost でのサーバの起動

以下を動かしている間は `http://localhost:4000/` でテスト環境にアクセスできます。ファイルを更新すると、テスト環境も自動で更新されます。

```
$ env LANG=ja_JP.UTF-8 bundle exec jekyll serve
```

`_site/` というディレクトリに生成したコンテンツが生成されています。

##### 手元でのコンテンツの生成

`_site/` にファイルを生成したいだけなら以下。

```
$ env LANG=ja_JP.UTF-8 bundle exec jekyll build
```
