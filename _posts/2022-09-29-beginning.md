---
layout: "article"
title: "プログラミング・シンポジウムのはじまり"
description: "この記事は、プログラミング・シンポジウムの立ち上げから発展まで大きくかかわった山内二郎先生の追悼集として、有志によって 1985 年に発刊された「山内二郎先生 人と業績」第 I 部の第 6 章「情報処理」から「6.2 プログラミング・シンポジウム」を引用して、プログラミング・シンポジウムのはじまりについて紹介します。"
author: "プログラミング・シンポジウム委員会"
author_url: "https://prosym.org/"
license: "prosym"
update: 2022-09-30
---

この記事は、プログラミング・シンポジウムの立ち上げから発展まで大きくかかわった[山内二郎](https://museum.ipsj.or.jp/pioneer/yamauc.html)先生の追悼集として、有志によって 1985 年に発刊された「山内二郎先生 人と業績」 [^yamauti-ziro-sensei-hito-to-gyouseki] 第 I 部の第 6 章「情報処理」から「6.2 プログラミング・シンポジウム」を引用して、プログラミング・シンポジウムのはじまりについて紹介します。

[^yamauti-ziro-sensei-hito-to-gyouseki]: 山内二郎先生追悼集刊行委員会編: 「山内二郎先生 人と業績」 (1985年 11月) \[[CiNii](https://cir.nii.ac.jp/crid/1130282270367408768)\] \[[国立国会図書館サーチ](https://iss.ndl.go.jp/books/R100000002-I000001819063-00)\]

<style>
div.image-list {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    margin: 1rem auto 1rem auto;
}

div.image-list img {
    padding: 0.5rem 0.5rem 0.5rem 0.5rem;
}

div.image-list img.quotation-yamauti-ziro-sensei-hito-to-gyouseki-spine {
    width: 20%;
    max-width: 100%;
    height: auto;
}

div.image-list img.quotation-yamauti-ziro-sensei-hito-to-gyouseki-inside-cover {
    width: 63%;
    max-width: 100%;
    height: auto;
}

@media (max-width:600px) {
    img.quotation-yamauti-ziro-sensei-hito-to-gyouseki-spine {
        width: auto;
        height: 142px;
    }

    img.quotation-yamauti-ziro-sensei-hito-to-gyouseki-inside-cover {
        width: 252px;
        height: 142px;
    }
}
</style>

<div class="image-list"><img class="quotation-yamauti-ziro-sensei-hito-to-gyouseki-spine" src="{{ "/assets/images/yamauti_ziro_sensei_hito_to_gyouseki_spine.jpg" | relative_url }}" alt="山内二郎先生 人と業績 背表紙"/><img class="quotation-yamauti-ziro-sensei-hito-to-gyouseki-inside-cover" src="{{ "/assets/images/yamauti_ziro_sensei_hito_to_gyouseki_inside_cover.jpg" | relative_url }}" alt="山内二郎先生 人と業績 中表紙"/></div>

これは長いあいだ「プログラミング・シンポジウム こと始め」として [<code class="url">http://www.ipsj.or.jp/prosym/prosynstartup0.html</code>](http://www.ipsj.or.jp/prosym/prosynstartup0.html) に置かれていた内容ですが、それを「[記事](/articles/)」コーナーの一部として移動し、体裁を原著に近づけて再掲するものです。

1960 年 (昭和 35 年) に第 1 回が開催されたときからプログラミング・シンポジウムが何を大切にしてきたのか、そしてこれが書かれた 1985 年 (昭和 60 年) までプロシンにかかわってきた人たちがどれだけ「プログラミング」のあれこれを楽しんでいたのか、伝わってくる資料になっていると思います。

----

<style>
div.quotation-yamauti-ziro-sensei-hito-to-gyouseki {
    background: #f8fff8;
    border-style: solid;
    border-width: 1px;
    border-color: #ccddcc;
    padding: 1rem 1rem 1rem 1rem;
    width: fit-content;
}

@media (max-width:600px) {
    div.quotation-yamauti-ziro-sensei-hito-to-gyouseki {
        width: auto;
    }
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki h2 {
    font-size: 1.2rem;
    border: 0;
    margin-top: 1rem;
    margin-bottom: 1rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki p {
    text-indent: 1rem;
    white-space: pre;
}

@media (max-width:600px) {
    div.quotation-yamauti-ziro-sensei-hito-to-gyouseki p {
        white-space: normal;
    }
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki p.unindented {
    text-indent: 0;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki div.unified-header-and-paragraph {
    margin: 1rem 0 1rem 0;
    display: block;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki div.unified-header-and-paragraph h3 {
    font-size: 1rem;
    border: 0;
    margin: 0 2rem 0 0;
    padding: 0;
    display: inline;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki div.unified-header-and-paragraph p {
    display: inline;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki dl.committee {
    margin: 1rem 0 1rem 2rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki dl.committee dt {
    display: inline;
    float: left;
    margin-right: 1rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki dl.committee dd {
    white-space: pre;
    padding-left: 1rem;
}

@media (max-width:600px) {
    div.quotation-yamauti-ziro-sensei-hito-to-gyouseki dl.committee dd {
        white-space: normal;
    }
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki .first-letter-space::first-letter {
    letter-spacing: 1rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki dl.committee dt.first-letter-space::first-letter {
    letter-spacing: 1rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki dl.program {
    margin: 1rem 0 1rem 2rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki dl.history {
    margin: 1rem 0 1rem 2rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki dl.history dd {
    display: list-item;
    white-space: pre;
    list-style-type: disc;
}

@media (max-width:600px) {
    div.quotation-yamauti-ziro-sensei-hito-to-gyouseki dl.history dd {
        white-space: normal;
    }
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki blockquote {
    border-style: solid;
    border-width: 1px;
    border-color: black;
    margin: 1rem 0 1rem 0;
    padding: 0.5rem 1rem 0.5rem 1rem;
    font-size: 0.9rem;
    width: fit-content;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki blockquote div.whole-indented {
    margin-left: 1rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki blockquote div.unified-header-and-paragraph {
    text-indent: -1rem;
    margin: 1rem 0 1rem 0;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki blockquote div.unified-header-and-paragraph h4 {
    font-weight: normal;
    text-decoration: underline;
    border: 0;
    margin: 0;
    padding: 0;
    display: inline;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki blockquote div.unified-header-and-paragraph p {
    display: inline;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki blockquote div.unified-header-and-paragraph p::before {
    content: "：";
    text-decoration: none;
    display: inline-block;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki table {
    border-style: solid none solid none;
    border-width: 2px;
    border-color: black;
    border-collapse: collapse;
    margin: 1rem auto 2rem auto;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki table caption {
    font-weight: bold;
    white-space: nowrap;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki table thead th {
    border-style: none none solid solid;
    border-width: 1px;
    border-color: black;
    font-weight: normal;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki table.attendance thead th {
    padding-left: 1rem;
    padding-right: 1.5rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki table thead th:first-child {
    border-left: none;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki table tbody td {
    border-style: none none none solid;
    border-width: 1px;
    border-color: black;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki table.attendance tbody td {
    text-align: center;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki table.summer tbody td {
    padding: 0 1rem 0 1rem;
}

div.quotation-yamauti-ziro-sensei-hito-to-gyouseki table tbody td:first-child {
    border-left: none;
}
</style>

<div class="quotation-yamauti-ziro-sensei-hito-to-gyouseki">

<h2 id="6.2">6.2 プログラミング・シンポジウム</h2>

<p>プログラミング・シンポジウムは，山内先生が晩年の四半世紀に最も情熱を
注がれた活動の一つであった．このシンポジウムは我が国のコンピュータの草
創期にあたる昭和35年 1 月に第 1 回が開催されて以来，毎年 1 月に箱根付近で
2 泊 3 日の合宿形式で今日まで続けられ， ‘箱根のシンポジウム’ とか ‘プロ・
シン’ と呼ばれ，親しまれている．</p>

<div class="unified-header-and-paragraph"><h3 id="6.2.1">6.2.1 数理科学の総合研究</h3><p class="follow-inline-h">昭和34年度文部省科学研究費において ‘部にまた
がる総合研究’ として， ‘数理科学の総合研究’ が認められた。この総合研究は
昭和37年まで 4 年にわたって継続される。数理科学という言葉はその当時まだ
耳新しいものであったが，これは純粋数学と応用数学のギャップを埋め，また
特に計算機の研究と計算機を使って研究を行なう新しい学問領域を指すものと
された。</p></div>

<p>‘数理科学の総合研究’ は彌永昌吉教授(当時東大理)を研究代表として</p>

<ol style="list-style-type: upper-roman">
<li>数理科学の方法論的研究</li>
<li>物理数学の近代解析的研究</li>
<li>非線形問題</li>
<li>計算機のプログラミング</li>
<li>制御過程の基礎理論</li>
<li>Queus および Games の理論的・実験的研究</li>
</ol>

<p>の 6 班から構成され，各班毎に研究を深めると同時に，相互に問題を提供し合
い協力してこれを解決することにより，視野を広め，総合研究の実をあげよう
とするものであった。</p>

<p>第IV班は計算機の応用という点でこの総合研究の要となるものであったが，
山内先生は研究分担者としてこの班の総括を担当された。なおこの班の運営の
ために運営委員会が設けられたが，その構成は次の通りであった(敬称略)。</p>

<dl class="committee">
<dt>委員長</dt><dd>山内二郎</dd>
<dt class="first-letter-space">委員</dt><dd>大泉充郎，高橋秀俊，森口繁一，喜安善市(後に池野信一と交替)，
宇野利雄，黒田成勝，城　憲三，清水辰次郎，柴垣和三雄 (以上
何れも総合研究の研究分担者)</dd>
</dl>

<p>この班の研究目的は，文部省に提出された研究計画書に次の通り記されて
いる。</p>

<blockquote>

<p>近年計算機の必要性の急激な増大と，計算機械の理論の発達，エレクトロニク
ス方面の実用的成果とによって，計算機械の設計・製作が著しく向上し，各所で種
々の特長を具えた計算機械が誕生し，また誕生しつつある。</p>

<p>しかし，計算機械の製作される本来の目的である自然科学の研究の促進，工学上
の問題の実際的解決，社会現象の科学的分析等における非創造的部分のすべて及び
創造的部分の一部から人間の頭脳と手を解放し，人間自身がより高度の活動にたず
さわることを可能にし，また自然科学，工学，社会科学等において，人間の労働で
は時間的に不可能であった問題の解決を速やかに行わせることは，すべて数理科学
の問題であって，しかも計算機械本体の研究・製作と同様か，むしろそれ以上に重
要である。これがなければ，将にこぎ手とオールのないボートを池中に浮かべたの
に等しいといわなければならない。なぜならば，誕生しただけの教育を受けない計
算機械は，自から問題をとりあげ，それを解決し，目的とする解答を与えるという
ことはできないからである。</p>

<p>計算機械のプログラミングとは，問題または問題群が提出されるごとに，研究者
によって考案されたその解決方法を，計算機械の行うことのできる演算操作に逐一
分解し，計算機械の解釈できる記号に翻訳して総合し，計算機械が機械的にその手
順に従って動作すれば，目的とする正しい解答が得られるようにすることである。
同一の機械を用いて同一の問題を処理する場合でも，その手順の総合の仕方によっ
て，いく種類ものプログラミングが考えられ，そしてそれぞれ正しい解答を与えて
くれるであろう。</p>

<p>ここで我々の研究すべき “計算機械のプログラミング” の問題とは，計算機械に
とって，時間的にも，計算機械の容量の点からも最も経済的であり，得られた解答
の精密さ，信頼の高さの点で最も優れているようなプログラムはいかなる形式をも
っているか，またそれをいかにして作るか，ということである。そしてプログラミ
ングにはかなり機械的な作業を要するから当然の結果として，プログラミングの一
部を計算機械自身に行わせるためのプログラムを作成する必要が生ずる。さらにつ
け加えて考えるべきことは，プログラミングを十分考えた上の計算機械そのものの
設計改良が行われなければならない段階にありながら，現在はそれが考えられてい
ないといってもよく，ここにもわれわれの研究の現実的な寄与が期待される。</p>

<p>以上述べたような，計算機械の機能の充分な発揮，成果の向上，また，実際の問
題のプログラミングを行うに際して生ずる計算機械の機能に対する問題点の整理検
討と，それによる将来の計算機械への示唆等を目ざして，計算機械について研究
し，かつ他の専門分野をもついく人かの研究者のグループによって，さしあたりま
ず現在最も基本的なものとして要求されている 4 つの事項(研究内容参照)につい
て，各種の計算機械，各種の問題について有機的な関連のもとに研究を行ってい
く。</p>

</blockquote>

<p>また第 1 年度の研究計画として同調書に以下の如く記されている。</p>

<blockquote><div class="whole-indented">

<div class="unified-header-and-paragraph"><h4>1. 標準問題の作成</h4><p>科学技術計算および事務計算の分野で，それぞれ典型的と思
われる種類，大きさの問題を選んで組み合わせ，人間に対する知能検査と同じよ
うに，この問題を用いて，計算機械の性能を試験して，実際的な観点から種々の
項目について評価し，さらに実用上意義ある能力の総合的判定を可能にする。</p></div>

<p>これによって，各計算機械の性能と特徴が明瞭になり，すでにでき上った計算
機を利用する上に参考になるばかりでなく，さらにまた新しい計算機械を設計す
る時の具体的な目標が設けられるようになる。</p>

<div class="unified-header-and-paragraph"><h4>2. 各種計算機械の比較研究</h4><p>諸大学その他の研究機関から研究員を派遣してもら
い，利用可能な計算機械によって基本プログラミングを学んだ上で，研究員は手
分けして各種の計算機械のプログラムを作成し計算を行わせる。これらを行う間
に得られた資料に基き，計算機械の実際的な比較ができると同時に，計算機械の
全国共同利用に関する一つの試みとすることができる。またこれによって，計算
機械のプログラミング研究を全国的にして，多くの頭脳を結集し，より能率的に
よりよいアイディアを生かした優れたプログラムの生産を行う契機とすることが
できる。</p></div>

<div class="unified-header-and-paragraph"><h4>3. 特別な問題のプログラミング</h4><p>他の研究班で必要とする計算で，特に研究に多
くの時間や特別の知識を要求されるやや困難なプログラミングの問題になるもの
を取り上げて実行する。たとえば，定理の証明を機械にやらせるためのプログラ
ミング，原子物理学上の問題のためのプログラミングなどが提案されている。</p></div>

<p>このような問題は，各所で解決を要求されているが，多くの人々が別々に研究
していたのでは，非常に困難であるとともに，努力の重複による無駄を避けられ
ない。これを，このような研究グループを中心にして統一的に協力研究すること
は，実際上においても大きな価値がある。</p>

<div class="unified-header-and-paragraph"><h4>4. 自動プログラミング</h4><p>計算機械にかける個々の問題のプログラムを計算機械自
身に作らせることを研究する。またさらに，計算以外の判断を伴った仕事，たと
えば分類，翻訳等を計算機械にやらせる仕方についても研究してゆきたい。</p></div>

<p>これらの研究によって，各人が，個々の計算機械を使う特殊な “言葉” を習う
必要がなくなり，多種多様な問題をいちいち特殊な訓練，教育を受けた人をわず
らわしてプログラムすることがさけられ，計算機械を可能なかぎり広範囲の仕事
に従事させることを可能にして，人間の能力をより自由に働かせることが期待さ
れ，将来の大きな夢の実現に一歩近づけることになる。</p>

<div class="unified-header-and-paragraph"><h4>5. その他の活動</h4><p>〈シンポジウム〉 各グループの会合を行うと共に，全国から計
算機械およびそのプログラミングの研究者を招いて，広い視野から，この目的に
沿った意見の交換を行い，研究成果を広めるとともに，より一層健全な方向に研
究を推進するための会合を，時間と費用の許す限りの回数行いたい。</p></div>

<p class="unindented">〈研究速報の発行〉 ある部分について研究がまとまった都度，グループの内外の
研究者にそのリポートを送り，直ちに実用に供することを可能にすると同時に大
方の意見を得たい。これによって，研究活動がよりダイナミックに進行すること
であろう。</p>

</div></blockquote>

<div class="unified-header-and-paragraph"><h3 id="6.2.2">6.2.2 プログラミング・シンポジウムの開催</h3><p class="follow-inline-h">前記の研究計画の第 5 項に記
されたシンポジウムは， ‘電子計算機用プログラミング・シンポジウム’ として
昭和35年 1 月10日〜13日の間，神奈川県大磯の大磯ホテルに54名の研究者を集
めて開催された。シンポジウム開催準備のために幹事会が設けられたが，その
構成は下記の通りであった。</p></div>

<dl class="committee">
<dt>幹事長</dt><dd>浦　昭二</dd>
<dt class="first-letter-space">幹事</dt><dd>有山正孝，清水留三郎，高須 達(後に米田信夫と交替)，
戸田英雄，永坂秀子</dd>
</dl>

<p>シンポジウムは 5 つのセッションに分かれ，各セッション毎に下に示すメイ
ンスピーカーが話題を提供し，これをめぐって討論を行う形式で進められた。</p>

<dl class="program">
<dt>Ａ：サブルーチン (関数近似を含む)</dt>
<dd>山内次郎，戸田英雄：有理関数による近似</dd>
<dt>Ｂ：線型計算および固有値</dt>
<dd>島内武彦：行列の固有値</dd>
<dd>鈴木誠道：線型計算</dd>
<dt>Ｃ：高精度計算</dt>
<dd>高橋秀俊，石橋善弘：行列式その他の exact calculation</dd>
<dd>宇野利雄：一，二の慣用計算における Numerical Instability について</dd>
<dt>Ｄ：自動プログラミング</dt>
<dd>森口繁一：International Algebraic Language (ALGOL) について</dd>
<dt>Ｅ：特殊な問題のプログラミング</dt>
<dd>池野信一：増山の問題(巡回差集合による直交配列表の生成)</dd>
<dd>高須達，杉林益太郎，藤川洋一郎：定理の証明を機械で行う問題</dd>
</dl>

<p>実際には上記の発表を含めてＡで 5 件，Ｂで 4 件，Ｃで 2 件，Ｄで 3 件，Ｅ
で 5 件の研究発表があり，討論は深夜に及んできわめて活発に行われた。その
当時国内で研究に利用できた電子計算機は僅々十数台に過ぎず，その性能も今
日のパーソナル・コンピュータ以下のものであったことを思えば，このシンポ
ジウムは非常に水準の高い内容の充実したもので，黎明期にあった我が国の計
算機研究に与えたインパクトは少なくなかった。</p>

<p>シンポジウムは次年度以降も継続して毎年 1 月に開催されることとなった
が，計算機人口の急増に伴ってシンポジウム参加者も表 6.1 に示すように増加
し，幹事団は会場の設営とプログラムの編成に苦労した。なお参加者は大学・
研究所関係者に限定せず，計算機メーカーおよびユーザからの参加も少なくな
かった。ただし科学研究費補助金による活動であったため，これらの会社関係
者には合宿の経費を自己負担していただいたのであった。</p>

<table class="attendance">
<caption>表 6.1&nbsp;&nbsp;プログラミング・シンポジウム参加状況</caption>
<thead>
<tr><th class="first-letter-space">年度</th><th>大学関係者</th><th>会社関係者</th><th class="first-letter-space">合計</th></tr>
</thead>
<tbody>
<tr><td>34</td><td>34</td><td>20</td><td>54</td></tr>
<tr><td>35</td><td>42</td><td>42</td><td>84</td></tr>
<tr><td>36</td><td>63</td><td>51</td><td>114</td></tr>
<tr><td>37</td><td>64</td><td>59</td><td>123</td></tr>
</tbody>
</table>

<div class="unified-header-and-paragraph"><h3 id="6.2.3">6.2.3 プログラミング・シンポジウム委員会の発足</h3><p class="follow-inline-h"> ‘数理科学の総合研究’
は昭和37年度を以て終了したが，プログラミング・シンポジウムの意義を高く
評価してその継続を望む声が強かった。そのため，運営委員会・幹事会で種々
検討の結果，経費を個人の参加費と計算機関係業界からの寄付に頼って引き続
きシンポジウムを開催することとした。またこれまでの運営委員会がプログラ
ミング・シンポジウム委員会と改称してその運営を担当することとした。ただ
しこの時すでに情報処理学会が設立されていたため，同様の目的・内容を持つ
研究活動が異なる母体の下で展開されることは将来にわたって望ましくないと
の判断に基づき，同学会との間で話し合いが行われ，プログラミング・シンポ
ジウム委員会は情報処理学会の研究委員会の 1 つとなること，ただし従来の運
営方式を継続して独立採算制をとり，事務は慶応工学会に委託することで了解
が成立した。こうしてシンポジウムは新しい体制の下で再出発することとなる
が，ここに至るまでの山内先生の御苦労には少なからざるものがあった。</p></div>

<p>その後20年余の間に運営委員・幹事の交替もあり，会場も第 5 回・第 6 回は
伊東のハトヤホテル，第 7 回からはモテル・ハコネ(現彫刻の森ホテル)，第24
回からは箱根ホテル小涌園と変ったが， 1 月10日前後に 2 泊 3 日の合宿でパラ
レル・セッションは設けず夜はいくつかのテーマをめぐって自由討論という伝
統の方式は，今日まで継承されている。参加者数は増加を続け，一時は 300 人
を超えるに至ったが，後に述べるような新しい企画の効果もあって，概ね 200
人前後に落着いた。</p>

<p>山内先生は自らも第 1 回，第 3 回〜第 8 回のシンポジウムで関数近似に関す
る研究発表をされている。</p>

<dl class="history">
<dt>第 1 回(昭和35年 1 月)</dt>
<dd>大型計算機械用関数近似についての 1 つの試み</dd>
<dd>関数の関数を <i>n</i> 回微分するためのサブルーチンとエルミット多項式
<i>H<sub>i</sub> (x)</i> のサブルーチン (戸田英雄氏と共著)</dd>
<dt>第 3 回(昭和37年 1 月)</dt>
<dd>有理関数近似の一様最良化について</dd>
<dt>第 4 回(昭和38年 1 月)</dt>
<dd>奇関数の一様最良多項式近似式の折りたたみ計算法</dd>
<dt>第 5 回(昭和39年 1 月)</dt>
<dd>正規分布に関する近似関数</dd>
<dt>第 6 回(昭和40年 1 月)</dt>
<dd>正規分布の百分率点の一次有理関数近似</dd>
<dt>第 7 回(昭和41年 1 月)</dt>
<dd>折りたたみ計算法による一様最良化有理関数近似の例</dd>
<dt>第 8 回(昭和42年 1 月)</dt>
<dd>級数の逆転の一般式とそのプログラム (戸田英雄氏と共著)</dd>
</dl>

<p class="unindented">これらの論文の内容については，第 5 章で述べてある。</p>

<p>先生は会場では常に最前列に端然と着席されて講演・討論に耳を傾けておい
でになり，しばしば鋭い質問を発して討論をリードされた。夜の自由討論の席
でも深更に到るまで，時には酒盃を片手に，孫のような若者達の論争に加わっ
て楽しそうに時を過されるのが常であった。このシンポジウムの伝統となった
自由な雰囲気と率直な討論の習慣は，先生のお人柄と学問に対する姿勢から醸
し出されたものと言っても過言ではなく，またそれあればこそこのシンポジウ
ムが四半世紀にわたって熱心な共鳴者に支持され，活気と高い存在意義を保ち
続けることができたのである。</p>

<div class="unified-header-and-paragraph"><h3 id="6.2.4">6.2.4 夢のシンポジウムと若手の会</h3><p class="follow-inline-h">前述のようにシンポジウムは参加者の
増加に伴って運営に困難を感じる面も出てきたので，運営委員会，幹事会で種
々検討の結果，いくつかの方策が考えられ，実行に移された。</p></div>

<p>一つは宿題研究で，一定の課題を定めて次の年にこれに関する研究報告を募
る方式である。たとえば第 8 回(昭和42年)は ‘常備分方程式の数値解法(清水辰
次郎先生の提起された問題)’ と ‘計算機利用の教育’ ，第 9 回(昭和43年)は ‘数式
処理’ と ‘プログラミングにおける誤り’ が課題とされた。この方式は第14回(昭
和48年)まで続けられ，また昭和49年からこのシンポジウムの中で行われている
GPCC (Game and Puzzle Competition on Computer) で継承されている。</p>

<p>もう 1 つの方策は ‘夢のシンポジウム’ の開催であった。昭和39年 1 月の運営
委員会で， ‘将来の計算機の夢を語るシンポジウム’ の開催が計画された。 1 月
のシンポジウムがかなりの大人数のものになったのに対して，夢のシンポジウ
ムは ‘若くて関心のある人または若くなくても夢のある人’ でかつ ‘積極的に発
言する人’ を条件として全員発表を建て前とする小人数の会合とし，時期は夏
で日程は 1 月と同様， 2 泊 3 日にすることにした。その第 1 回は昭和39年 7
月，熱海の早稲田大学双柿舎に28名を集めて開かれた。また第 2 回は翌昭和40
年 7 月，伊東温泉大東館に30名を集め， ‘計測管理の夢，パターン認識について
の夢，データ伝送についての夢’ をテーマとして開かれた。</p>

<p>昭和42年夏の第 4 回 ‘夢のシンポジウム’ の際に，大学院学生の年代の人々を
中心として ‘情報科学若手の会’ が自発的に結成された。シンポジウム委員会は
これに若干の経済的援助をすることを決めた。その最初の会合は昭和43年 7 月
に開催され，以来今日まで毎年夏，全国各大学の大学院学生が回り持ちで企画
を立てて続けられている。若い研究者の育成にとりわけ心を用いておられた山
内先生は，この若手の会に慈父の如き愛情を注いでおいでになったが，この会
で活躍した人々はそれぞれ今日中堅となって先生の御期待に応えている。</p>

<p>この ‘若手の会’ の発足と連動して ‘夢のシンポジウム’ も性格を改め，特定
のテーマについて小人数で突込んだ討論ができるようにして， 1 月のシンポジ
ウムと相補的なものとすることとした。この方針に従って昭和44年夏以来，毎
年 1 〜 2 回のシンポジウムが開かれ， 1 月のシンポジウムに劣らず活発な発
表，討論が行われている。各年度の夏のシンポジウムのテーマを表 6.2 に示
す。</p>

<table class="summer">
<caption>表 6.2&nbsp;&nbsp;夏のシンポジウムのテーマ</caption>
<thead>
<tr><th>年度</th><th>テーマ</th></tr>
</thead>
<tbody>
<tr><td>昭和44年</td><td>コンパイラ自動作成</td></tr>
<tr><td>昭和45年</td><td>グラフィック・ディスプレイ</td></tr>
<tr><td>昭和45年</td><td>オペレーティング・システムズ</td></tr>
<tr><td>昭和46年</td><td>情報公害</td></tr>
<tr><td>昭和46年</td><td>システム制御</td></tr>
<tr><td>昭和47年</td><td>システム評価</td></tr>
<tr><td>昭和47年</td><td>ミニコンのソフトウェアとネットワーク</td></tr>
<tr><td>昭和48年</td><td>ダイナミック・マイクロプログラミング</td></tr>
<tr><td>昭和49年</td><td>記号処理</td></tr>
<tr><td>昭和50年</td><td>構造的プログラミングとその経験</td></tr>
<tr><td>昭和51年</td><td>職業的プログラマの養成</td></tr>
<tr><td>昭和52年</td><td>マイクロコンピュータとソフトウェア</td></tr>
<tr><td>昭和53年</td><td>日本語情報処理</td></tr>
<tr><td>昭和54年</td><td>よいプログラムを作るには</td></tr>
<tr><td>昭和55年</td><td>作譜工程の評価・改良・自動化</td></tr>
<tr><td>昭和56年</td><td>ソフトウェア業と技術移転</td></tr>
<tr><td>昭和57年</td><td>マイコン・パソコンにおけるソフトウェア問題</td></tr>
<tr><td>昭和58年</td><td>コンピュータにおけるヒューマン・インターフェース</td></tr>
<tr><td>昭和59年</td><td>計算機と音楽</td></tr>
</tbody>
</table>

<div class="unified-header-and-paragraph"><h3 id="6.2.5">6.2.5 委員長の交替</h3><p class="follow-inline-h">昭和50年頃から先生は健康のおとろえを示され，「監視
付きという条件でやっと医者の許可をもらってきたのだよ」と謂われて奥様御
同伴で箱根においでになり，以前のように夜遅くまで若い者たちの論争に加わ
ることも控えられるようになった。そして昭和54年 1 月，第20回シンポジウム
の機会に，後事を高橋秀俊教授に託して運営委員長を辞されたのである。</p></div>

<p>この年，無理を押してシンポジウムに参加された先生は，委員長の後任を選
任した運営委員会の翌日，御病気が急変して呼吸困難を起され，救急車で小田
原の病院に入院された。それがプログラミング・シンポジウムの会場で先生の
お姿に接する最後の機会となったのである。</p>

<p>シンポジウムは高橋委員長の下で従前と変らぬ活気を以て継続されている
が，諸般の事情により，処和59年度からその事務取扱いを慶応工学会より引き
上げ，情報処理学会事務局で取り扱うこととなった。</p>

<p>奇しくもその事務引きつぎの終了した 3 月31日，我々は山内先生の訃報に接
したのである。</p>

<p>昭和60年 1 月，第26回シンポジウムは山内先生の御遺影を会場に掲げて開催
された。かなりお若い頃のものと思われる先生のお写真は，在りし日の先生が，
何時もそうであったように，柔和な微笑をたたえながら鋭いまなざしで，参加
者の討論を厳しくしかし暖かく見守って下さっていた。</p>

<p>なおプログラミング・シンポジウムの創設とその発展に尽された先生の多大
の御貢献を記念して，有志の者が集まって昭和59年 1 月，山内記念会を設立し
たことを申し添えておく。この会は計算機のプログラミングに関する学術・技
術の進歩発展と普及を図り，またプログラミングに関する優れた業績を顕彰し
研究を奨励することによって学術文化の向上発展に寄与することを目的とする
ものである。この会の活躍を通じて，山内先生のお名前は関連分野の研究者の
間に永く伝えられるであろう。</p>

<p style="text-align: right;">(浦 昭二，有山 正孝)</p>

</div>
