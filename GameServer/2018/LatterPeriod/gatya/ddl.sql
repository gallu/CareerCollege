-- ユーザテーブル
CREATE TABLE users (
    user_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ユーザID',
    login_id VARBINARY(128) NOT NULL UNIQUE KEY COMMENT 'ログイン用のID',
    password VARBINARY(128) NOT NULL COMMENT 'hash化されたパスワード',
    user_name VARCHAR(32) NOT NULL COMMENT 'ユーザ名',
    PRIMARY KEY(user_id)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが１ユーザを意味するテーブル';

-- カードテーブル
CREATE TABLE cards (
    card_id BIGINT UNSIGNED NOT NULL COMMENT 'カードID',
    card_name VARCHAR(64) NOT NULL COMMENT 'カード名',
    card_text TEXT NOT NULL COMMENT 'カード説明(500文字以内程度)',
    image_uri BLOB NOT NULL COMMENT 'カード画像URI',
    maker VARCHAR(64) NOT NULL COMMENT '作成者',
    attack INT UNSIGNED NOT NULL COMMENT '攻撃力',
    defense  INT UNSIGNED NOT NULL COMMENT '防御力',
    PRIMARY KEY(card_id)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが１種類のカードを意味するテーブル';


card_id	card_name	card_text	image_uri	maker	attack	defense
1	ケルベロス	ギリシア神話に登場する犬の怪物。ハーデースが支配する冥界の番犬。	http://img-cdn.jg.jugem.jp/a01/930029/20130421_160978.jpg	gallu	500	500
2	オルトロス	ギリシア神話に登場する怪物である。双頭の犬で、ゲーリュオーンの牛の番犬とされる。	http://file.toukatuwannyan.blog.shinobi.jp/12-8-18-1.JPG	gallu	500	500
3	ガルム	ヘルヘイムにあるヘルの館「エーリューズニル」の番犬で入り口にある洞窟グニパヘリルに繋がれている。	https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Shibainu_Maru.jpg/320px-Shibainu_Maru.jpg	gallu	500	500
4	フェンリル	北欧神話に登場する狼の姿をした巨大な怪物。	https://shiba.min-breeder.com/breeder/data/suzukanoyuuen/dog_img_1_501815fbab34.jpg	gallu	500	500
5	ヘルハウンド	イギリス全土に伝承のある黒い犬の姿をした不吉な妖精。	https://wanpedia.com/wordpress/wp-content/uploads/2017/02/Fotolia_133625449_Subscription_Monthly_M.jpg	gallu	500	500
6	ブラックドッグ	夜中に古い道や十字路に現れ、燃えるような赤い目に黒い体の大きな犬の姿をしている。	https://www.shibainu-shop.net/wp/wp-content/uploads/2013/09/DSC_0890SHIBA-640x480.jpg	gallu	500	500
7	クー・シー	スコットランドに伝わる犬の妖精。	https://cdn.pixabay.com/photo/2016/01/19/01/32/shiba-inu-1147811_960_720.jpg	gallu	500	500
8	バーゲスト	イングランド北西部ノーサンバーランド周辺の民間伝承に登場する不吉な妖精。	https://cdn.wanchan.jp/c/wanchan.jp/pro/resize/600x600/100/2/0e14eb3a4100f0c515f5e9211d5f31a9.jpg	gallu	500	500
9	カヴァス	アーサー王の犬。	https://s3-ap-northeast-1.amazonaws.com/peco-images/optimized_images/274433.png	gallu	500	500
10	サラマー	インド神話に登場する神話的な雌の犬。	https://static.pepy.jp/wp-content/uploads/2017/04/19080749/shutterstock_390575614-480x321.jpg	gallu	500	500
11	モーザ・ドゥーグ	マン島の西岸に建つピール城に出没したといわれる伝説の毛深い黒妖犬。	https://shiba-inogayatsu.xyz/main1/wp-content/uploads/2018/07/DSC_5355.jpg	gallu	500	500
12	ライラプス	ギリシア神話に登場する犬。この犬はどんな獲物でも決して逃がさないと運命に定められている。	https://d31jxhg0q1s5oq.cloudfront.net/wp-content/uploads/2018/06/IMG_1470-650x402.jpg	gallu	500	500
13	バンダースナッチ	ルイス・キャロルの詩『ジャバウォックの詩』と『スナーク狩り』で言及される架空の生物。	http://image.news.livedoor.com/newsimage/stf/e/8/e8ba2_1547_4cbfbbbf0c64fc3a81148a0c37676f63.jpg	gallu	500	500
14	ティンダロスの猟犬	時間が生まれる以前の超太古、異常な角度をもつ空間に住む不浄な存在。	https://www.wannya365.jp/img/articles/256_6f9b4256-6ad5-46c5-8a9b-13a7d692341b_1.jpg	gallu	500	500
15	讙(かん)	西方にある翼望（よくぼう）山に棲む。	http://livedoor.blogimg.jp/shibainu_donguri/imgs/0/d/0db9b10c.jpg	gallu	500	500
16	犬神	狐憑き、狐持ちなどとともに、西日本に最も広く分布する犬霊の憑き物（つきもの）。	https://static.curazy.com/wp-content/uploads/2015/11/835aa63a5fcdf1cd2a771cb96744d74f-600x315.jpg	gallu	500	500
17	送り犬	日本の妖怪の一種。夜中に山道を歩くと後ろからぴたりとついてくる犬で、もし何かの拍子で転んでしまうとたちまち食い殺されてしまう。	https://pbs.twimg.com/media/C2bjLj4WIAEkv_b.jpg	gallu	500	500
card_id	card_name	card_text	image_uri	maker	attack	defense
18	バブルソート	隣り合う要素の大小を比較しながら整列させる。並列処理との親和性が高い。	https://image.slidesharecdn.com/sorting-140428101424-phpapp02/95/-4-638.jpg?cb=1398680712	Aoki	200	150
19	選択ソート	ソートされてない部分から最小値をとって並べる。	https://image.slidesharecdn.com/sorting-140428101424-phpapp02/95/-5-638.jpg?cb=1398680712	Aoki	240	180
20	挿入ソート	整列してある配列に追加要素を適切な場所に挿入する。	https://image.slidesharecdn.com/2014-01-18insertionsort-140117144732-phpapp01/95/-3-638.jpg?cb=1389970321	Aoki	300	250
21	ヒープソート	リストの並べ替えを二分ヒープ木を用いて行う	http://www.ics.kagoshima-u.ac.jp/~fuchida/edu/algorithm/sort-algorithm/images/heap-sort-image.gif	Aoki	240	300
22	マージソート	小さく分割して少しずつ統合	https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQynFji8yJ7ytjrdKx2yrERqcZV2I-F7CUdjiKwSMjuGqP80O2Q	Aoki	400	260
23	クイックソート	軸を決めて並び替え	https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdfREkHyY7mT5ySDslr3tYNZbQd3OJipjywwJWdDaoaI8Td2a3	Aoki	600	700
24	ボゴソート	とりあえずシャッフル	https://image.slidesharecdn.com/sorting-140428101424-phpapp02/95/-9-638.jpg?cb=1398680712	Aoki	10	10
25	するめ	するめいかを乾燥させたもの。おいしい。		toutu	10	5
26	メッチャツヨイーノ	何をとち狂ったのか神が作ってしまった僕の考えた最強のキャラ。宇宙の法則が乱れる。大体弱体化される。		toutu	999999	999999
27	魔術師ワ―何とかさん	量産型ラスボス。部下の悪魔の方が強かったりする。クリアの証として鈴をもっているがそのせいで乱獲される。可哀そう。		toutu	255	255
28	リプトン	神が人間にもたらした叡智。飲むと頭が良くなったりする。パッケージがリメイクされるたびにダサくなる。		toutu	100	80
29	花	怖い。		toutu	1	25
30	物理演算のび○	物理演算によって生まれた某有名キャラ	https://pbs.twimg.com/profile_images/937736482445393920/Scu082-z.jpg	rabbit	500	500
31	シバター	名の知れたYoutuber	https://logtube.jp/wpfile/wp-content/uploads/2018/02/%E3%82%B7%E3%83%90%E3%82%BF%E3%83%BC.jpg	rabbit	9999999	0
32	頭の悪い人	見たらわかる、頭悪い奴やん！!	https://pbs.twimg.com/media/DCecxrXUwAAHi8g.jpg	rabbit	0	0
33	覚醒してくれそうなマスコット	きっと、何かを覚醒してくれるのだろう・・・	https://i.ytimg.com/vi/vcuvCxxq4SU/maxresdefault.jpg	rabbit	50	50
34	アズカバン直行が決定した人	この後、アズカバンに行くことが言い渡される事を彼はまだ知らない	https://pbs.twimg.com/media/DGDm6BMUIAQPPsE.jpg	rabbit	-9999999	-9999999
35	サンプルケルベロス	ギリシア神話に登場する犬の怪物。ハーデースが支配する冥界の番犬。	http://img-cdn.jg.jugem.jp/a01/930029/20130421_160978.jpg	gallu	500	500
36	とどめの一言	ゲームで煽られて絶望した人間へ送るとどめの一撃。	https://pbs.twimg.com/media/DYiKT3ZVwAEJUbm.jpg	GYARI	9999	0
37	ええんちゃう	やや当たりに分類される。妥協点とされるカード(適当)。	https://pbs.twimg.com/media/DZEQZD3U8AApGGS.jpg	GYARI	1500	1500
38	圧倒的存在感	何か重要なことを言いそうなオーラを纏っている。	https://i.ytimg.com/vi/OVuYIMa5XBw/maxresdefault.jpg	GYARI	500	2000
39	Hai! Hai! Hai! Hai!	手拍子役は4人まで分身することができそうだ	https://i.ytimg.com/vi/txvQLTgpd_c/maxresdefault.jpg	GYARI	500	700
40	バタバタ	理由はわからないが楽しそうにバタバタしている	https://coubsecure-s.akamaihd.net/get/b96/p/coub/simple/cw_timeline_pic/8132302cba2/e91bfbe89593d21a9f4fd/big_1538685242_image.jpg	GYARI	300	800
41	シュッ!	振り向いて欲しい人への会心のアピール	https://coubsecure-s.akamaihd.net/get/b191/p/coub/simple/cw_timeline_pic/522c9a7245e/6f78a0650503fda1cd1af/big_1538648300_image.jpg	GYARI	2000	300
42	ええええええええええええ	衝撃な一言に対してショックしている図	https://i.ytimg.com/vi/-uaKK_fyLM4/maxresdefault.jpg	GYARI	2000	0
43	灼熱くん	YO!	https://stat.ameba.jp/user_images/20140808/17/littleyoshi/e0/c8/p/o0600060013028339716.png	matto	667	1719
44	conflict	ズォールヒ～～↑ｗｗｗｗヴィヤーンタースｗｗｗｗｗワース フェスツｗｗｗｗｗｗｗルオルｗｗｗｗｗプローイユクｗｗｗｗｗｗｗダルフェ スォーイヴォーｗｗｗｗｗスウェンネｗｗｗｗヤットゥ ヴ ヒェンヴガｒジョｊゴアｊガオガオッガｗｗｗじゃｇｊｊ	https://cdn.img-conv.gamerch.com/img.gamerch.com/chunithm/1450256723.jpg	matto	1111	1111
45	パステルくん	わーいらくちーん	data:image/jpeg;base64,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	matto	100	100
46	Initiation	Forever.	https://pbs.twimg.com/profile_images/1032283685792477185/uit5b8T9_400x400.jpg	matto	2018	2018
47	ライオン	六段の敵。	https://pbs.twimg.com/profile_images/896553335297155072/LOTJhIEK_400x400.jpg	matto	900	755
48	鵞鳥（ガチョウ）	鵞鳥（ガチョウ）	https://aromayuika.net/wp-content/uploads/2016/01/%E3%82%A2%E3%83%92%E3%83%AB-150x150.jpg	kazeyuki	5	5
49	グール	　早口で、泣くような声と形容される独特の話し方をする。その姿は見る者に不潔で不愉快な印象を与える。食料は動物の死骸や排泄物。人間の死体を求めて活動していることが多い。 	http://deliver.commons.nicovideo.jp/thumbnail/nc179141?size=l	kazeyuki	20	15
50	ウォーデン  Edit	それは古の戦士たち。弱きを守ることに 誓いを立てたもの。ロングソードの達人。そのルーツは忘れられつつあるが、今なお正義のために戦うことを誓う。	http://t1.baidu.com/it/u=1085012529,633096941&fm=20	kazeyuki	50	20
51	CHUCKLES(チャックルズ)	不気味な笑みを浮かべたマスクが特徴。見ようによっては可愛い罠使い。 	https://img.atwikiimg.com/www65.atwiki.jp/deadbydaylight/attach/20/567/Trapper02.jpg	kazeyuki	200	500
52	サフラン	"どうも、サフランです。王室御用達のファッションブランド、「アスファル」を作った大貴族の娘です。
"	https://フラワーナイトガール.攻略wiki.com/index.php?plugin=ref&page=%E3%82%B5%E3%83%95%E3%83%A9%E3%83%B3&src=%E3%82%B5%E3%83%95%E3%83%A9%E3%83%B3%E9%80%B2%E5%8C%96%E5%89%8D%E7%AB%8B%E3%81%A1%E7%B5%B5.png	kazeyuki	8084	3410
53	東方輝仁裂	アーティスト：MASAKI　東方ジャンル最多のチェイン数で超物量譜面。連打できないと死ゾ。	http://dev2.m-fr.net/muxu1118/gatya/image/kijinretu.JPG	kimita	957	2
54	Linear Accelerator	アーティスト：The Shaft　EX初の難易度15。コラボ元の「Tone Sphere」でもボス曲である。	http://dev2.m-fr.net/muxu1118/gatya/image/lenear.JPG	kimita	732	0
55	Good Night,Bad Luck.	アーティスト：t+pazolite　譜面を記憶しないと叩けない譜面。とぱぞ絶対許さないからな。	http://dev2.m-fr.net/muxu1118/gatya/image/yurusanai.JPG	kimita	840	39
56	ouroboros -twin stroke of the end-	アーティスト：Cranky VS MASAKI　BPM282で24分SLIDEという速さの暴力。かっこいい。	http://dev2.m-fr.net/muxu1118/gatya/image/ouroboros.JPG	kimita	1,089	6
57	BUCHiGiRE Berserker	アーティスト：REDALiCE vs MASAKI　作曲者（REDALiCE）が譜面を見てうんこを漏らした。	http://dev2.m-fr.net/muxu1118/gatya/image/buchigire.JPG	kimita	1,141	20
58	スペシャルウィーク	天才武豊をダービー初制覇に導いた名馬	https://i1.wp.com/satokitchen-keiba.net/wp-content/uploads/2018/05/%E3%82%B9%E3%83%9A%E3%82%B7%E3%83%A3%E3%83%AB%E3%82%A6%E3%82%A3%E3%83%BC%E3%82%AF0508.jpg?w=380&ssl=1	Derby0211	350	150
59	サイレンススズカ	影をも踏ませぬ奇跡の逃亡者。	https://prc.jp/jraracingviewer/contents/yushun/img/big_05.jpg	Derby0211	500	1
60	ディープインパクト	平成最強と名高い無敗の三冠馬。奇跡に最も近い馬	https://keiba-news.tv/system/item_images/images/000/002/642/medium/4b866afb-fd06-41ce-b26d-a7571911a24d.jpg?1462776070	Derby0211	500	500
61	オグリキャップ	葦毛の怪物。90年のラストランは競馬ファンなら知らない者はいない	https://number.ismcdn.jp/mwimgs/c/5/350/img_c5bc9aacdfe35fa8d6a17e04ef681e87393703.jpg	Derby0211	250	200
62	クロフネ	日本競馬のダート最強馬最有力。たった二戦でダート界の伝説になった	https://takeyutakafun.xyz/wp-content/uploads/2017/05/kurofune3.jpg	Derby0211	350	400
63	オルフェーブル	平成の暴君。騎手を振り落とすやんちゃっ子は三冠で世代最強を証明した	https://realkeibamusou.com/wp-content/uploads/2016/09/@-4.jpg	Derby0211	500	200
64	キタサンブラック	つい最近まで現役で走っていた日本最強馬。北島三郎の最高傑作。	https://www.keibalab.jp/img/upload/topics/201704/170430_kitasanblack.jpg	Derby0211	400	300
65	ゴドルフィンアラビアン	すべてのサラブレットの始祖の三頭のうちの一頭。	https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Godolphin_Arabian.jpg/230px-Godolphin_Arabian.jpg	Derby0211	10000	10000
66	ピク里先輩	隠れてないピクミン	https://pbs.twimg.com/media/DqpdjUUVAAEctt2.jpg:large	イニシャルG	5	500
67	ピク里先輩_2	大御所のピクミン	https://pbs.twimg.com/media/Dp1xd03VsAAaZ0Q.jpg	イニシャルG	1000	2
68	ピク里先輩_3	何かに目覚めるピクミン	https://pbs.twimg.com/media/Dp1xjCCUcAATw5K.jpg	イニシャルG	1	1
69	ピク里先輩_4	脱皮	https://pbs.twimg.com/media/DpUPeqfVAAEMb1B.jpg	イニシャルG	0	0
70	ピク里先輩_5	ビクッ	https://pbs.twimg.com/media/DpUAFr8UcAAtWji.jpg	イニシャルG	1000000	1000000
71	某T君	忘れてたけど誕おめ	https://pbs.twimg.com/media/DNvLQPNUIAAylX8.jpg	イニシャルG	8888	8888
72	社畜	みんなのアイドル☆	https://pbs.twimg.com/media/DNvF2ceUQAE5650.jpg	イニシャルG	0	0
73	月曜日が怖い	みんな楽したいんだよ	https://pbs.twimg.com/profile_images/482351856836804609/ZewZqH-O_400x400.jpeg	イニシャルG	1000	10000
74	ミ↑ミ↓	皆の敵、12＋とか絶対嘘だゾ。13+ゾ。		masapo	114	514
75	ギーゼグール	皆の敵その2、BPM357、すきやき奉行ゾ。		masapo	1919	810
76	リリィ	皆の敵その3、鳥のアタ許容3とかふざけてるゾ		masapo	364	364
77	ローズマリー	皆の敵その４、音ゲーなのに運ゲーだゾ。		masapo	114	514
78	八咫烏鋼太郎	かわいい、みさくらなんこつゾ。		masapo	364	364
79	マクドナルド	地方によって略称が異なる	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZU12wAIs-tdsasX1voOpjESbq4kjIoDE_jTNmj2jjed-4kot_Iw	K	100	0
80	KFC	ケンタッキーフライドチキンからKFCにイメージ戦略で名称が変更された	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk2H80kXbxlIuwiz0h57w7lbnZMba2laV68olMvr9YMRHAfx2B1Q	K	300	0
81	ウェンディーズ	開業当初では珍しいオーダーメイドシステムを導入	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSikisZIWgMjJ7vHDH7TzkcBcVlUq_74yf25GkFL1Spg8sbqGrY7Q	K	400	300
82	ガチャピン&ムック	永遠の5歳	https://www.zakzak.co.jp/images/news/180214/ent1802145516-m1.jpg	K	500	500
83	ストレッチマン	NHK教育テレビ（NHK Eテレ）で放送されていた特別支援学校・特別支援学級向けの学校放送番組の主人公	http://cyoppaya.com/wp-content/uploads/2017/08/Unknown-16.jpeg	K	2000	1000
84	無個性	どんどん増殖してゆく自身の形を失った者たち。「次は君の番だ」	http://buzz-netnews.com/wp-content/uploads/2015/10/58_foodcube00-e1446463160888.jpg	miku	600	200
85	みかみか	攻撃されないと攻撃しない。ペットとして飼われる事多数	http://eventsnews.info/wp-content/uploads/2015/12/gazou002125.jpg	miku	10	10
86	マガイモノ	見た目に惑わされてはいけない	https://isuta.jp/wp-content/uploads/2015/10/vanessamckeown-7.jpg	miku	100	100
87	喰い物	彼の視界に入ったら終わりと思え。	http://livedoor.blogimg.jp/blog_owner-mesopota/imgs/6/e/6e413a7e.jpg	miku	10000	9500


INSERT INTO cards SET card_id='1', card_name='ケルベロス', card_text='ギリシア神話に登場する犬の怪物。ハーデースが支配する冥界の番犬。', image_uri='http://img-cdn.jg.jugem.jp/a01/930029/20130421_160978.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='2', card_name='オルトロス', card_text='ギリシア神話に登場する怪物である。双頭の犬で、ゲーリュオーンの牛の番犬とされる。', image_uri='http://file.toukatuwannyan.blog.shinobi.jp/12-8-18-1.JPG', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='3', card_name='ガルム', card_text='ヘルヘイムにあるヘルの館「エーリューズニル」の番犬で入り口にある洞窟グニパヘリルに繋がれている。', image_uri='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Shibainu_Maru.jpg/320px-Shibainu_Maru.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='4', card_name='フェンリル', card_text='北欧神話に登場する狼の姿をした巨大な怪物。', image_uri='https://shiba.min-breeder.com/breeder/data/suzukanoyuuen/dog_img_1_501815fbab34.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='5', card_name='ヘルハウンド', card_text='イギリス全土に伝承のある黒い犬の姿をした不吉な妖精。', image_uri='https://wanpedia.com/wordpress/wp-content/uploads/2017/02/Fotolia_133625449_Subscription_Monthly_M.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='6', card_name='ブラックドッグ', card_text='夜中に古い道や十字路に現れ、燃えるような赤い目に黒い体の大きな犬の姿をしている。', image_uri='https://www.shibainu-shop.net/wp/wp-content/uploads/2013/09/DSC_0890SHIBA-640x480.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='7', card_name='クー・シー', card_text='スコットランドに伝わる犬の妖精。', image_uri='https://cdn.pixabay.com/photo/2016/01/19/01/32/shiba-inu-1147811_960_720.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='8', card_name='バーゲスト', card_text='イングランド北西部ノーサンバーランド周辺の民間伝承に登場する不吉な妖精。', image_uri='https://cdn.wanchan.jp/c/wanchan.jp/pro/resize/600x600/100/2/0e14eb3a4100f0c515f5e9211d5f31a9.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='9', card_name='カヴァス', card_text='アーサー王の犬。', image_uri='https://s3-ap-northeast-1.amazonaws.com/peco-images/optimized_images/274433.png', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='10', card_name='サラマー', card_text='インド神話に登場する神話的な雌の犬。', image_uri='https://static.pepy.jp/wp-content/uploads/2017/04/19080749/shutterstock_390575614-480x321.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='11', card_name='モーザ・ドゥーグ', card_text='マン島の西岸に建つピール城に出没したといわれる伝説の毛深い黒妖犬。', image_uri='https://shiba-inogayatsu.xyz/main1/wp-content/uploads/2018/07/DSC_5355.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='12', card_name='ライラプス', card_text='ギリシア神話に登場する犬。この犬はどんな獲物でも決して逃がさないと運命に定められている。', image_uri='https://d31jxhg0q1s5oq.cloudfront.net/wp-content/uploads/2018/06/IMG_1470-650x402.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='13', card_name='バンダースナッチ', card_text='ルイス・キャロルの詩『ジャバウォックの詩』と『スナーク狩り』で言及される架空の生物。', image_uri='http://image.news.livedoor.com/newsimage/stf/e/8/e8ba2_1547_4cbfbbbf0c64fc3a81148a0c37676f63.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='14', card_name='ティンダロスの猟犬', card_text='時間が生まれる以前の超太古、異常な角度をもつ空間に住む不浄な存在。', image_uri='https://www.wannya365.jp/img/articles/256_6f9b4256-6ad5-46c5-8a9b-13a7d692341b_1.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='15', card_name='讙(かん)', card_text='西方にある翼望（よくぼう）山に棲む。', image_uri='http://livedoor.blogimg.jp/shibainu_donguri/imgs/0/d/0db9b10c.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='16', card_name='犬神', card_text='狐憑き、狐持ちなどとともに、西日本に最も広く分布する犬霊の憑き物（つきもの）。', image_uri='https://static.curazy.com/wp-content/uploads/2015/11/835aa63a5fcdf1cd2a771cb96744d74f-600x315.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='17', card_name='送り犬', card_text='日本の妖怪の一種。夜中に山道を歩くと後ろからぴたりとついてくる犬で、もし何かの拍子で転んでしまうとたちまち食い殺されてしまう。', image_uri='https://pbs.twimg.com/media/C2bjLj4WIAEkv_b.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='18', card_name='バブルソート', card_text='隣り合う要素の大小を比較しながら整列させる。並列処理との親和性が高い。', image_uri='https://image.slidesharecdn.com/sorting-140428101424-phpapp02/95/-4-638.jpg?cb=1398680712', maker='Aoki', attack='200', defense='150';
INSERT INTO cards SET card_id='19', card_name='選択ソート', card_text='ソートされてない部分から最小値をとって並べる。', image_uri='https://image.slidesharecdn.com/sorting-140428101424-phpapp02/95/-5-638.jpg?cb=1398680712', maker='Aoki', attack='240', defense='180';
INSERT INTO cards SET card_id='20', card_name='挿入ソート', card_text='整列してある配列に追加要素を適切な場所に挿入する。', image_uri='https://image.slidesharecdn.com/2014-01-18insertionsort-140117144732-phpapp01/95/-3-638.jpg?cb=1389970321', maker='Aoki', attack='300', defense='250';
INSERT INTO cards SET card_id='21', card_name='ヒープソート', card_text='リストの並べ替えを二分ヒープ木を用いて行う', image_uri='http://www.ics.kagoshima-u.ac.jp/~fuchida/edu/algorithm/sort-algorithm/images/heap-sort-image.gif', maker='Aoki', attack='240', defense='300';
INSERT INTO cards SET card_id='22', card_name='マージソート', card_text='小さく分割して少しずつ統合', image_uri='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQynFji8yJ7ytjrdKx2yrERqcZV2I-F7CUdjiKwSMjuGqP80O2Q', maker='Aoki', attack='400', defense='260';
INSERT INTO cards SET card_id='23', card_name='クイックソート', card_text='軸を決めて並び替え', image_uri='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdfREkHyY7mT5ySDslr3tYNZbQd3OJipjywwJWdDaoaI8Td2a3', maker='Aoki', attack='600', defense='700';
INSERT INTO cards SET card_id='24', card_name='ボゴソート', card_text='とりあえずシャッフル', image_uri='https://image.slidesharecdn.com/sorting-140428101424-phpapp02/95/-9-638.jpg?cb=1398680712', maker='Aoki', attack='10', defense='10';
INSERT INTO cards SET card_id='25', card_name='するめ', card_text='するめいかを乾燥させたもの。おいしい。', image_uri='', maker='toutu', attack='10', defense='5';
INSERT INTO cards SET card_id='26', card_name='メッチャツヨイーノ', card_text='何をとち狂ったのか神が作ってしまった僕の考えた最強のキャラ。宇宙の法則が乱れる。大体弱体化される。', image_uri='', maker='toutu', attack='999999', defense='999999';
INSERT INTO cards SET card_id='27', card_name='魔術師ワ―何とかさん', card_text='量産型ラスボス。部下の悪魔の方が強かったりする。クリアの証として鈴をもっているがそのせいで乱獲される。可哀そう。', image_uri='', maker='toutu', attack='255', defense='255';
INSERT INTO cards SET card_id='28', card_name='リプトン', card_text='神が人間にもたらした叡智。飲むと頭が良くなったりする。パッケージがリメイクされるたびにダサくなる。', image_uri='', maker='toutu', attack='100', defense='80';
INSERT INTO cards SET card_id='29', card_name='花', card_text='怖い。', image_uri='', maker='toutu', attack='1', defense='25';
INSERT INTO cards SET card_id='30', card_name='物理演算のび○', card_text='物理演算によって生まれた某有名キャラ', image_uri='https://pbs.twimg.com/profile_images/937736482445393920/Scu082-z.jpg', maker='rabbit', attack='500', defense='500';
INSERT INTO cards SET card_id='31', card_name='シバター', card_text='名の知れたYoutuber', image_uri='https://logtube.jp/wpfile/wp-content/uploads/2018/02/%E3%82%B7%E3%83%90%E3%82%BF%E3%83%BC.jpg', maker='rabbit', attack='9999999', defense='0';
INSERT INTO cards SET card_id='32', card_name='頭の悪い人', card_text='見たらわかる、頭悪い奴やん！!', image_uri='https://pbs.twimg.com/media/DCecxrXUwAAHi8g.jpg', maker='rabbit', attack='0', defense='0';
INSERT INTO cards SET card_id='33', card_name='覚醒してくれそうなマスコット', card_text='きっと、何かを覚醒してくれるのだろう・・・', image_uri='https://i.ytimg.com/vi/vcuvCxxq4SU/maxresdefault.jpg', maker='rabbit', attack='50', defense='50';
INSERT INTO cards SET card_id='34', card_name='アズカバン直行が決定した人', card_text='この後、アズカバンに行くことが言い渡される事を彼はまだ知らない', image_uri='https://pbs.twimg.com/media/DGDm6BMUIAQPPsE.jpg', maker='rabbit', attack='-9999999', defense='-9999999';
INSERT INTO cards SET card_id='35', card_name='サンプルケルベロス', card_text='ギリシア神話に登場する犬の怪物。ハーデースが支配する冥界の番犬。', image_uri='http://img-cdn.jg.jugem.jp/a01/930029/20130421_160978.jpg', maker='gallu', attack='500', defense='500';
INSERT INTO cards SET card_id='36', card_name='とどめの一言', card_text='ゲームで煽られて絶望した人間へ送るとどめの一撃。', image_uri='https://pbs.twimg.com/media/DYiKT3ZVwAEJUbm.jpg', maker='GYARI', attack='9999', defense='0';
INSERT INTO cards SET card_id='37', card_name='ええんちゃう', card_text='やや当たりに分類される。妥協点とされるカード(適当)。', image_uri='https://pbs.twimg.com/media/DZEQZD3U8AApGGS.jpg', maker='GYARI', attack='1500', defense='1500';
INSERT INTO cards SET card_id='38', card_name='圧倒的存在感', card_text='何か重要なことを言いそうなオーラを纏っている。', image_uri='https://i.ytimg.com/vi/OVuYIMa5XBw/maxresdefault.jpg', maker='GYARI', attack='500', defense='2000';
INSERT INTO cards SET card_id='39', card_name='Hai! Hai! Hai! Hai!', card_text='手拍子役は4人まで分身することができそうだ', image_uri='https://i.ytimg.com/vi/txvQLTgpd_c/maxresdefault.jpg', maker='GYARI', attack='500', defense='700';
INSERT INTO cards SET card_id='40', card_name='バタバタ', card_text='理由はわからないが楽しそうにバタバタしている', image_uri='https://coubsecure-s.akamaihd.net/get/b96/p/coub/simple/cw_timeline_pic/8132302cba2/e91bfbe89593d21a9f4fd/big_1538685242_image.jpg', maker='GYARI', attack='300', defense='800';
INSERT INTO cards SET card_id='41', card_name='シュッ!', card_text='振り向いて欲しい人への会心のアピール', image_uri='https://coubsecure-s.akamaihd.net/get/b191/p/coub/simple/cw_timeline_pic/522c9a7245e/6f78a0650503fda1cd1af/big_1538648300_image.jpg', maker='GYARI', attack='2000', defense='300';
INSERT INTO cards SET card_id='42', card_name='ええええええええええええ', card_text='衝撃な一言に対してショックしている図', image_uri='https://i.ytimg.com/vi/-uaKK_fyLM4/maxresdefault.jpg', maker='GYARI', attack='2000', defense='0';
INSERT INTO cards SET card_id='43', card_name='灼熱くん', card_text='YO!', image_uri='https://stat.ameba.jp/user_images/20140808/17/littleyoshi/e0/c8/p/o0600060013028339716.png', maker='matto', attack='667', defense='1719';
INSERT INTO cards SET card_id='44', card_name='conflict', card_text='ズォールヒ～～↑ｗｗｗｗヴィヤーンタースｗｗｗｗｗワース フェスツｗｗｗｗｗｗｗルオルｗｗｗｗｗプローイユクｗｗｗｗｗｗｗダルフェ スォーイヴォーｗｗｗｗｗスウェンネｗｗｗｗヤットゥ ヴ ヒェンヴガｒジョｊゴアｊガオガオッガｗｗｗじゃｇｊｊ', image_uri='https://cdn.img-conv.gamerch.com/img.gamerch.com/chunithm/1450256723.jpg', maker='matto', attack='1111', defense='1111';
INSERT INTO cards SET card_id='45', card_name='パステルくん', card_text='わーいらくちーん', image_uri='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxASEhUSEhAVFRUVFRUXFRYXFRcXFhUVFhUWFhUYGBcYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGyslHh8tLS0tKy0rLS0tLS0tLS0tLS0rLS0tLS0tLSstLS0tLS0tLS0tLS0tLS0tNy0tLS03Lf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQMEBQYCBwj/xABDEAABAwIEAwQIAwUGBgMAAAABAAIDBBEFEiExBkFREzJhcQciQoGRobHBI1JyFDOC0eEVYmOiwvAWJENTkrI0c4P/xAAaAQACAwEBAAAAAAAAAAAAAAAAAQIDBAUG/8QAKxEAAgIBBAEDBAICAwAAAAAAAAECEQMEEiExBRNBURQVImEykXGhIzNC/9oADAMBAAIRAxEAPwD3BCTMkzoA6QmzKuTKlYDyFHMqTtD1SsCTdNyStbu4BUuI4qQcrD5lVDnvcdST8VB5PgltNX+3xfnCcZUMOzgfesh2bvylctJGxKjvl8EnBG2zIzLNUWKObo7UfNXsMrXNuDopxmmRcR/MluqypxeNmg9Y+GyinH+jPmjehbWXqVU8OONJs5pCtIpWuFwbhSUkwaocRdNvkA1JsFSVuNnURjTqk5pAlZeueBuUCQHYhYyWoe7VziVy156n4qHqN+xLYba6VZSlxORm5JHitBQ1rJBcaeClGd8EXGiYhJdCsECEIQAJUiEACEIQA0VyQuiVw4ooBCuHuA3KC4k5Rv8AQJ6OADz6ndFITZG7Vvj8D/JQ8TqwBZpFyrnKoVdhrJPB3Uffqk0mFtGfp4Mx12U9thsLJh4dE4McPI8nKuxDEDfK0+Z+y14NOmuC6EXkdIuS8cyPimZYWu6X6rMuk8VyJ3t1jdY9N2nzC1y0Vo1fSNe5cSMI0K6ic8+q0nXkEzh+ItqWHTLIzR7eYP8AJPUs+Q3t4Lk5cDhOmZppxtPsrsXxAQPEbge0IuG9B1Kbp6qR3IeSzGOY+aurc4WDI/w2ddDqSfNaTC5RYars4tBCGJNrlnmtXrMry1F8ImOlc3vMNuo1U2jr3s1Y64PwTjXNI1IVLMTFIMly1zrFo3ueYCw5dJFpuPFGrBr5RajPlMuaqvkk7x06DRRV3JG5ps4EeYso8kgFyTYAa35WWLBgeWdHZtVwPxhPxvbtceVwsa/GHzk5CWxA2FtHP8T0Hgu416CHj0omnHopNXJmzdTAjTQpiOV0br7EKqwzEnMsHG7fHce9aCrjDmZ268/MLlazS7OUV5MTxumX1HVB7b+AUoLL4LVZXAHYkD4/1t8Vp2rJB2jO0KhCFMQJUiVACIQhAEclNvfYXXRTbRdwHv8Ah/UqyhvhD9PHlGu51KeCoMYxzLmZGHB4IGbKLeO6dw/Ep3uaHRhreZLtTpuAoU+xqDqy6cmmztJLQ4Ejccwkq3ODCWAF1tAdiVkabt3Tva1wa9/fI5Ab2RGNjjC0amvpGytLT7jzB5ELzqoY+KR0UneHP8wPNanJJTzxjtXPD9CCfcueN8MzxdswevELnqWc1r0uX05JPpluGXpy/wAmWzLkuUeGbMLrrMu8lZ11yRqmd0MrKhnI5ZB+ZpW3omMeO0IzNePV6G41WNmAcCDzV/w3XAQiNwIyHKHDax11+Kx63CnFSoweQhUNy7KLEvR/I175KV7cl8zYjfNf2gHKThmAV3qjsg0HmXDTzstvBY2DXA+AKmRi2lxf5rJ9ZljHaeZlpYzlbKSi4blt+LKB0yi+nmVdUmDwsIc1gzDnzXU1dHHYOdvyGqYdjQzWa0lvXbVZJTyzNePTYo+xJxGnY5hz+yCQemi8p4uq3CNsLTrIdT/dG/2XoNWe1JzDQ7DosVxRg72yCYDMwCw6t8x08Vu8dGMJ/kdHSpPIrKumYGgNGwFlMjUSIqVGV3JHdvglRlaTh6e7Sw8tvIrNRlXWAO/E/hK5+rgpQM2pinAlZcr7dCR8VrqKXMxruoHx5rKVR/FPmFosCdeFvm7/ANivMx4k0ciRPQlQrCAiVCEAIhCEARCkpRcuPkPv90p5/wC+qWi2P6j9VN9BIgcQUT5GtDSAAbvJ5Ac/FUVYynDLRufJKe6QT8uS2bwLWsqrC5YnSSMZE1oZ7Qtqb/JJPgsjJ0TaVj+yaHH1soBPjZUtDhUkM7SLuaQ7M7xP3WkULGnOELyze2n3+V0kxRkQ2YY98/bSPBDT6jRy6XVs9oIIOx0Pv3Vbw4W9i3K6+5drexO+6tAEMjLs8ixKl/ZqmSHlfMz9LtR8NlyXLQ+k+jt2VSB3TkcfB21/f9Vl2PuF6TQ5PUxqzraWe6A8NdBz2WhpIQxob8fNU+DxXcXcm/Uq9YjUSt0Ytflbe0dZHz5rrsudzfrdK1OBYpJHNQjIApDGhcBPCJ2+U262Krk0iSOgurA6EXBXDU7G0k2Crddk02nZj8fwTsj2kY/DJ1H5Cfsq2NegxujkDg17JANHBrmut52WNxjDTA+w7jtWn7LoaPVblsZ2NJqNy2y7GI1e8Os9cu5NHzKpKaNziGtFyVpmRiKMMHeOrio67MoQolqciUdvucOfdxd5n3BaXh9tqeP9IPx1WQqybNjb3pTkAHJvtnyt9Vu6aPK0N6AD5LzkOW2cuQ4hCFaQBKkSoARCEIAiFdUPd95+qQhLRH1T+p31U2+BPtBXzZI3O6NJWUwqqliyusMkj9SRqdrn6rUYrSGWMszZb21tfYg/ZV1YKazKeTpcO2Atfc8kostg+CVS4mHzOiA0aL5r/JWDlXYLFTtBEJBsfWO+vmn8Sr2QgFwJubaJMg++CpwID9omyCzNveDy991olErJuzjc9rb2F7DS/ilw6rErA8c9x0PMIfI5c8lbxnRdtRzM5hpcPNuoXk2HzXYCvcpWBwII0IIPkV41g2FtD3scT6j3AjYaFdPxmbbaZdgzrHdl7hEWWMdTr8VYMTTBbQJ6Napu3ZhyT3ych4J1NNToVTIiYhXNpqaaqLc3ZNu1vIvOjb+8rx2TjDE3ydp+2SBxOgbYMF9hltay9jqqaOeGWnlvkmblJG7TyK8wl9GuItflaYXtvpL2lhbqW2vfwXNzqW4uhVHonCmMOq6Zsr2hsgc5kgGgLm2OYDxBCk8QslNHUiK4kML8pG+2trc91URxf2fTR08Ts8r3El5Ghee8+3QCwHkq/EaSUWd+0yOdvmzEa+Q09ymr20zo6bx7zc3VnnvCGJyUtRHLEbagPF9HsJAcCOZXvOKUDJWlh2vdttxzXmXCGB0b6z8drnPB7RgvZjnDUhzet9V6rcnUqGNSg7KtRgnp8m19lFAxkYsxtjzPNNzyta0vkdla3VzvsOp6BSq9lnnx1TFPgP7TO10j7xRta5sfIvubuPVZcs5ZJ1JlTbaslcI0jpXGrkblBGWJp9lg+53K1wXMbABYCwC6UkqKmCEITAEqRCABCEIAZITdH7Q6O+uqesmYjZ5HUA/7+SaIsdqYs7XNJIuCLjfXosdPRhs5jjYZLAaOPPqStqVAxKkc4XY/szfV1hqOhKcXRbCVMq6KpkhlbE9jAH/k3HmpXFEJdBcDuuB9233XOE4bHm7XtO1cPavoD4K4kjBBBFwdCOoQ2EpKykosW7R7Ig0EFnrnXQ22TmBUkkT5WFpyXuw6W1/pZWFJh8Ud8jAL7+KlAIbByXsC8rk9WuqG/wCIT8dV6qV5bi1hiU38J/yi6v0v8zPkLJqdYm2pxi6jKUOhOhNBOAqtkxxqcCbC7buPE2Vcv2SRmuOA5nYzgHK0ua49M1rH7KmlxPM3detHD45Iyx7Q5rhYgrHV3o4p75mPe1t+6DoPInVY96bPSeO8lhx41DIujMcHRulrWuaPVja5zj0uLAL0wJzBcCgpY8kTLA7nmfM802dz5ojKzn+Q1a1OXcuiuxYesPL7qTw878S3WP8A1FRsVdqB0Ck8PNvK4/ljaPiS77rFL/sMn/k0aVIlVhARCEIAEqRKgBEIQgDkqLPo5jvGx9/9VKKYqmXaQhdikuCQCouLMc6F4buWkD4J2mkzNB8PmnHo6YJ+5TcMTM7LI0Wc0+sOd+qugqHDIHmpkkLC1ti0X9rUa/L5q+YE2Tl2KhKkSIgvKsXdfE5v4R/lH8l6pdeSsf2ldUPH/cdbyGivwS2yK5qy8C7BXAXQXVsp6HwV2CmWlOgqDJIdBSudax6G65BXYUGSRc0eINsma7EL6MFyqwQNT8TQNgs7xRTskmOjEnuFgDfyXbNBquGlRqypsMo35+CrySjBE4psjTvzPJ5X+AHNWnCLbsfL/wBxxI/SNG/JZyrzPLadnfl71vYiv6xPnt71vKOnEbGsbs0AfBYIctssk/YeSoQrSAiEqEAIlQhACIQhACFckLuy5sgCHTOyvLDz1b9wpbyotfESA5vebqExiFcP2d7wfZt4hx0T7IxXNETBKt0ksri/1SbMaT06BXoKxv8AZzooo5wCXZgSANhy093zVtg8ssszpDmbHawaevl8finJF0ortF8ChIEqiVkXEKgRxvkOzWk/ALyXhNxLndpo9xJHR4Jvp4r0LjeOZ1K9kTS4uIDrbhvPTmqTDMHZJAGvFjyPMFD6ElbOi1c2UGpgrKfcdvHyOzwPPmPNc0eJMluG5w5vea5pBHLyKsjq5w7JvCmWQRJUMb3ntb0u4BQqqqbGx0jzZrRck/TzXm00klRKXNYXue7S52HIK362+ka9N46M+ZypHqcmK07O9OwfxKHPxbRMNu0Lv0tJ+a87qaCWIhsseQnYG2vkea7hoi46yMb5n7BJZ8k+kdL7ZpMavJM27+PKYd2OV3uA+6iwceSSSNZHS3zOA1drv4Ktw6hoGetNI+Y8mMabe8qLUVOWYvYzsti1v5engrYY8k/c52s1Wi06/wCONno8lS46bBUuO8QU1G1jp3lokdlbYZjfck9AOq4wzG2viBcLyZrEDQAfmPX3LH+m6H/l6d49mVzf/Jlx/wCq5s1Le4yMkZqUd0fc9T4ZMPado0Nd2wBDwb5tNCD0t9lrAvIPRNiJfQQEnWF5j9zXXHyIXrrHg7FOLrgTHEJAlVhERCEIAEqRKgBEIQgAQQlSIA4cFUVsYjJLmh0Tu+0i/vV0U3NGHCxQJnMDmloy2LbaW2snAFnp2TUxLohmYdSw/Y8l3BxTTHR7jG7o4fdMW40AXD3gakgeaoKzjCijFxLnP5WalZDFMUqa9wY1pZFfujc+ZRQXfR6O+riAuZGgeLgs7iPE9Cw2YRI/+5t7yNFRxcGEj1nFWdBwhG3UhFhsb7HKHEDKbhm/ySYpAGkWaAS3W2nNXlNQtYLAKBjlPq11+RB+F1CfKLYKjy7jOComkaL5Y27i9tb97xUjDMLcA1wYQwDe1gtZVU7Xtym3+zyXFfiUBY8RuvkFiLaCw2U8TiscvkszZXOUY9JGNxlvaSAZrhgsNbqzwB1AG/8AMtfmBPdaSPDZU4qRcmxOvTTVaHhrHKWOMtlpnPfmJuGg6HbmpYW4Kjp67DGWnjJdos48aoI//j0T5Hci4WHzWO4hMrpy+RmQvAIbyAGnNbhnFbRpTYeb8i6w+mpWf4spK54bUTRgXIa1rRa2b5lbNNPbPk8xrMW6PFEDh2B5bI5gzEEDTUjnqOh+ye9LFN2mG3y6tkidbmCfU/1K4wmgZSxOkkdZxALzfQdGjxWaxrG31BsPVjvo3rbYnxXO1maLyuUTteG8Xlz40nwvkz/o5xCpog5skV4ZDci9ntdawc0dNtF6PScW05P7x0Z6uuB8RoFhVy9t9FjeVt2ep+wYVjr3PZqPHn2aTZ7XAEOHtDkQRoQrqlxCOTuu16HQrw/C+Iq6mg/Z4zFJGBaPtWEui/SWkXHgVd4PxZoG1NmvH/UYDlPiW+yrVlr3PP5PEaiLf4nsAKULMYZjhsCXZ2HYjXTz5rSxSBwBBuCr4yUjlzhKDqR0hCVSIiIQhACpEqRAAUiEFAHDwDuqqtwaKTdoVs5cEIAzP/CsN72VnSYcyPuj5KwIXJt/spWA3qkseqUvZ1CbNQzqEWMXL4qux6P8PMLnKbmwvpz+V0/W4rHGzNv005rMVnFDGuyvlsT7N7C32UJTRZDHKT4EqWkxnszclpynr096oIKCfsXgRuzOcBY2GnMprH+PaSjswMMj98jCLC/5nLMVPpff/wBOjaP1PJ+gThOSjSRDJi/K2aSPhupuNGAXBIL97G+oAWvw97425RBT89bOcbk35rxip9K2IO7jYmeTL/VVlTx9ism9U5v6QG/ZTnknL4JQtLbyz6FdV1J0a5sf6YwPmSqyRjA8PmqC5w27SQWHk29gvnmfF6+XvVE7v/0fb4XU/h/DHvkzyhxDdfWvqeW6plJpcs1abTTyzUYx7/R6RxFixmflafw2nT+8epVQUkbSTYBPmkf0HxWXbKXJ7fFk0+kisbaQwhOdg78pXGU9D8EtrNUdVil1JCIQUWSpk3lx12iwwXF307tNYz3m/cdCvTsCxdosQc0b9fI8/LyXmXD3DFbXskmgdExjHuY3PcmRze9a3dF9LqXwTiL2vfFIA20jo3tJ7kzDYgdQVfGMonkfKT0udtwf5L/Z7aCulU4BUFzC07t09ytlqTtHm6oEIQmAIQkugBCVy5yUlcuSGNvkKZfIU88pp7x4JEkkRXuco72uUqSdo5hRpK1n5gk2TUUMmFy5/ZzzTVXjETASXeVllsX4tijBdK8gch/IKDmWqEWaHFKZrmd9twbjXdY3F+G+0cXsdYkatN7G3Q8lQVfpTgH7une7oS4AfBVVR6Vp/Ypox5lzlBxci/Dn9CVxJ2IYAO7NF77fRwVV/wAK07dXOIHiQFDq/SRXyCxMQHQR/wAyoM3FL5GgPFi1wN2gcvApenNHSWv02RXkirNAzAqNpboDmNm3cTcjpZORw0wcWthuW3vZhIuNxfqshUY1e2W9he17XzE3J8NQE2/H5S7PoHXvcDX39Qn6cmH3HTx6iv6Nia9jWgiKwLsovlbrzv0TtNWZ3EWA9UO301NlhZsZlcCL2Gcv0HtFRZK2R3ee4+/kj0W+w+9KDuKPVIK2CNt3zRtJ3u4bJiXieibvOD+kF30C8rJQGlXxioqjiajPPPkc37no83G9INhI7+G31UGXj9ns05P6nfyWIEbjyT0WHzO7sT3eTSfoEcFaWRdWaSbj2c92GNvxKgy8Y1p2ka39LGqJBw9VPsGwuueun1UwcJTg/iSwx9c0guPMIVEpTyx4bZZcLekrEKCJ8UTmOa9xeM7b5Hu7xb59FX8KtnqsQis5znPnErz5OzvcRslZw9TAgPr4ySQA1gLiSdAB1Xr3A3CEVAxzgS+WQC7nAAtbyYBy8UTkkipWz0Hh0avdy0Cv1iMLxtuZzIpmPLD+IwEEtP8Ae6LXU1Yx49VwJ6cwowkqCSpkhCLoVhE5JXBclKaeUgEfKVGkmPVdvKjSX6JDoZmmPVQppSpMsbjyUWWncgmoNkGaUqJLIeqsH0TuoTDsP6uSbLFimzK41VesbnRg1XkfE+IOllIJNgvWsdoG5Hm51OvxWHfwzASXOc4k+QVW78jo49FOWK00YNAYV6NBw7SNFzGXHkLk/RSI8HiHdph723+qm8n6Ko+PTf5TSPMhGeiejw+U7Md8CvUWYeRtE1vuAXboCN3sb/FZLfL4LPotLH+WT+jzWLAKl3/TKmRcKTnfKPettNVUze/VRj3hQ5cfw9u8znfpaSi5sezQQ7bZno+ET7UgHuUuLhSIbyE+QCmni6kBsyGV55af1XM/FEzWl7cOeGDd7w4Ae+1kbZPth9Toofxx2NuwOkjF36Dq51lz22Hs2DD5C/1WbxrGpal4c+wAFmtHdb1P9V6jwd6OqdsPaVYjnMgY+MguAa0jY7X3UXjrti+5RX8MaRkHcQ0jO6z4NAXH/G7QMrISAd3ZtfHQBesMwjCYNewpGW5uDL/5iVWcT4jg81NJTvqYGBw9XIB6rx3SA0ciiKRTm8hlyUuFX6Ml/ZUkk8NTFUfhWaba3I5jobpnEuB5KyrJhexgczO8u6g2Nhz5KLwFinepXOvlu6M8jr6wH1WsjxhkMhLCHyxtLjEHWc5ttW+HJXVS4MOTJLI7l2WfCnAVJRESH8aYe24ANYeeVvI+Kb9I3FwoouzjP/MStOX/AA2G4Lz49FmZPS1O82hoW+F3OefgAoPB+Cz11a+srmubHF+K8vaWhxGrWi/si3yVe13chXxSNPwbQR4VQyVlUSJJQHOBPrWOrIx1cb3960/BHED6uFtT2XZHOQ1t7gtB3BttyXmWL18uOV7KeK7adhNj0YO/K7xOw8wvbuGsNjbkjY0COJoDW9ANB776/FDX9gaTtXdEKTZCNrFaOCuCE6QuXBWisYcCmnhPlqaexFD3MjSDxUaQjqpb4go8kbfBKh75EOSRviozphyaVMfkHNMPmYgN7M7i0R1/Du1291Qz0eRrnBujQTYNBJtyHVbeaRjgQWk3WZrmuiDmRgBxuWE6gE7HxVclRJZJfJgXY1VVEgiooiDa7u0AuPP8tlV4hW4hHL2VRUGEjUkNuLW0tbe66ix6ow+skMoZK54/EsbA5tdOhuq3HOKpaioE+VrcoAY2wcAB1vuVNWRsvqnhLEZI2SxVRma9twMzmOt5EqgODzQuvV0tQ5vPUj/MLhdScb4idP2kjwa1g+Fhoor8WxGY5DLO8kdwZiSP0hOmKzTYTNw9oJKeZjv8RznNH/idlV8b19E54iooY2xs1MjRrI7zOtgqehwKrnLxFTyOMf7wW7nnfmptHwdXSU5qGQksBtb2zY2NmblHHyBseBcVwvD4C+Wpa6eSxdlY55YOTAQPifFUfHvGTq97Yoc4gbs07yP6kDl0C6Pozr8kTgGu7QtzNHeiB5uv06LX8N+j59HWskDmTRCMh7nizmvP5W9NtUm4rkKbMLg/B2JSRdrCxoa/M1+ZzWlobvmzbDxCsouEK6RoL8Rjy2sPxnvFugDeS9Vx3Dny0s0EJDHPaQ3kL72Pn91hxSYzYNbh0YsAL5/V052FtElKwopo/R7DvJXlx/uROPzcpkPA+HN3dUP97GD5XVizh7HX951NEPcT90+3gPEHfvcUt1EbD9rJ7l8hTIjeH6OIF9PTWlAPZvkle4B3kNCqcRRsmNQYnNnIIIMjBEHkWLgb3I8Fqx6MIjrLXVL/AHho+d1Jb6P8Ij74Lv8A7Jzb4Ao3oNrKWm4lhhjax1ZFmAAOQN/0tWe4s4u7aPsIJHyZ/wB4bO7v5QD1XocWG4HCfVip7+WcqXHi1Cz93CT0yQW+oS3foKKf0TYCYKUyvjLZpiSbizhG3uDwvqV7BhdJ2bAOZ1J8VQ8Mxmb8Qsc1vIO7x93ILWWTir5YN/AJUiFMiIuSF2kQAy4JiRpUwhcFAFe+M9Ew+mcVau8lwQeiQFO7D3FN/wBku6q7LHdFz2L0AUwwbqSmK/h5r26bjULQCld+ZAoz+YpNWM80rOC6J5lzRN7SQes46uB5EA7Kth9HOHtgEL23fzm7sh1v5W5L0+r4bikJc6+a2hvsquPgOAg9o5zidiTqPmobWPcZWbAsMBjuyIGGxbqGnQbut3k+amgEnbDL2uXKHNb69ug8Fr4uDaQNDTGDbn1Vk3A6cEERC420T2BuMHHiUVyIoXlztXAMynzJ5p2Osmfcx0riBvmIafdYL0BlFGDmDAD5J1sTRsAn6aDczAMhr3DO2FgB0ym9x43Cm0+CVmZpc8EHVwAAI8AVtAEqexC3MqKnB2ZPUFnDUeJ8RzWSqYcRuQynZvuS438bXXoqSyNqCzzhmE4s/wBqNnkz+afbwhXO79Y8dcun0XoCEbUFswzPR60/vJ5Hebj/ADUyDgCjbqW389VrkJ0hWUUHClGzaIKfFhMDdom/BTkJgcMYALAWXSVCAEQhCAFXKEIACkQhAAUBCEwOkiEJAKEiEIA6SIQgQJUIQMEIQgAQhCABCEIAEIQgAQhCABCEIAEIQgBEIQgD/9k=', maker='matto', attack='100', defense='100';
INSERT INTO cards SET card_id='46', card_name='Initiation', card_text='Forever.', image_uri='https://pbs.twimg.com/profile_images/1032283685792477185/uit5b8T9_400x400.jpg', maker='matto', attack='2018', defense='2018';
INSERT INTO cards SET card_id='47', card_name='ライオン', card_text='六段の敵。', image_uri='https://pbs.twimg.com/profile_images/896553335297155072/LOTJhIEK_400x400.jpg', maker='matto', attack='900', defense='755';
INSERT INTO cards SET card_id='48', card_name='鵞鳥（ガチョウ）', card_text='鵞鳥（ガチョウ）', image_uri='https://aromayuika.net/wp-content/uploads/2016/01/%E3%82%A2%E3%83%92%E3%83%AB-150x150.jpg', maker='kazeyuki', attack='5', defense='5';
INSERT INTO cards SET card_id='49', card_name='グール', card_text='　早口で、泣くような声と形容される独特の話し方をする。その姿は見る者に不潔で不愉快な印象を与える。食料は動物の死骸や排泄物。人間の死体を求めて活動していることが多い。 ', image_uri='http://deliver.commons.nicovideo.jp/thumbnail/nc179141?size=l', maker='kazeyuki', attack='20', defense='15';
INSERT INTO cards SET card_id='50', card_name='ウォーデン  Edit', card_text='それは古の戦士たち。弱きを守ることに 誓いを立てたもの。ロングソードの達人。そのルーツは忘れられつつあるが、今なお正義のために戦うことを誓う。', image_uri='http://t1.baidu.com/it/u=1085012529,633096941&fm=20', maker='kazeyuki', attack='50', defense='20';
INSERT INTO cards SET card_id='51', card_name='CHUCKLES(チャックルズ)', card_text='不気味な笑みを浮かべたマスクが特徴。見ようによっては可愛い罠使い。 ', image_uri='https://img.atwikiimg.com/www65.atwiki.jp/deadbydaylight/attach/20/567/Trapper02.jpg', maker='kazeyuki', attack='200', defense='500';
INSERT INTO cards SET card_id='52', card_name='サフラン', card_text='どうも、サフランです。王室御用達のファッションブランド、「アスファル」を作った大貴族の娘です。\n', image_uri='https://フラワーナイトガール.攻略wiki.com/index.php?plugin=ref&page=%E3%82%B5%E3%83%95%E3%83%A9%E3%83%B3&src=%E3%82%B5%E3%83%95%E3%83%A9%E3%83%B3%E9%80%B2%E5%8C%96%E5%89%8D%E7%AB%8B%E3%81%A1%E7%B5%B5.png', maker='kazeyuki', attack='8084', defense='3410';
INSERT INTO cards SET card_id='53', card_name='東方輝仁裂', card_text='アーティスト：MASAKI　東方ジャンル最多のチェイン数で超物量譜面。連打できないと死ゾ。', image_uri='http://dev2.m-fr.net/muxu1118/gatya/image/kijinretu.JPG', maker='kimita', attack='957', defense='2';
INSERT INTO cards SET card_id='54', card_name='Linear Accelerator', card_text='アーティスト：The Shaft　EX初の難易度15。コラボ元の「Tone Sphere」でもボス曲である。', image_uri='http://dev2.m-fr.net/muxu1118/gatya/image/lenear.JPG', maker='kimita', attack='732', defense='0';
INSERT INTO cards SET card_id='55', card_name='Good Night,Bad Luck.', card_text='アーティスト：t+pazolite　譜面を記憶しないと叩けない譜面。とぱぞ絶対許さないからな。', image_uri='http://dev2.m-fr.net/muxu1118/gatya/image/yurusanai.JPG', maker='kimita', attack='840', defense='39';
INSERT INTO cards SET card_id='56', card_name='ouroboros -twin stroke of the end-', card_text='アーティスト：Cranky VS MASAKI　BPM282で24分SLIDEという速さの暴力。かっこいい。', image_uri='http://dev2.m-fr.net/muxu1118/gatya/image/ouroboros.JPG', maker='kimita', attack='1,089', defense='6';
INSERT INTO cards SET card_id='57', card_name='BUCHiGiRE Berserker', card_text='アーティスト：REDALiCE vs MASAKI　作曲者（REDALiCE）が譜面を見てうんこを漏らした。', image_uri='http://dev2.m-fr.net/muxu1118/gatya/image/buchigire.JPG', maker='kimita', attack='1,141', defense='20';
INSERT INTO cards SET card_id='58', card_name='スペシャルウィーク', card_text='天才武豊をダービー初制覇に導いた名馬', image_uri='https://i1.wp.com/satokitchen-keiba.net/wp-content/uploads/2018/05/%E3%82%B9%E3%83%9A%E3%82%B7%E3%83%A3%E3%83%AB%E3%82%A6%E3%82%A3%E3%83%BC%E3%82%AF0508.jpg?w=380&ssl=1', maker='Derby0211', attack='350', defense='150';
INSERT INTO cards SET card_id='59', card_name='サイレンススズカ', card_text='影をも踏ませぬ奇跡の逃亡者。', image_uri='https://prc.jp/jraracingviewer/contents/yushun/img/big_05.jpg', maker='Derby0211', attack='500', defense='1';
INSERT INTO cards SET card_id='60', card_name='ディープインパクト', card_text='平成最強と名高い無敗の三冠馬。奇跡に最も近い馬', image_uri='https://keiba-news.tv/system/item_images/images/000/002/642/medium/4b866afb-fd06-41ce-b26d-a7571911a24d.jpg?1462776070', maker='Derby0211', attack='500', defense='500';
INSERT INTO cards SET card_id='61', card_name='オグリキャップ', card_text='葦毛の怪物。90年のラストランは競馬ファンなら知らない者はいない', image_uri='https://number.ismcdn.jp/mwimgs/c/5/350/img_c5bc9aacdfe35fa8d6a17e04ef681e87393703.jpg', maker='Derby0211', attack='250', defense='200';
INSERT INTO cards SET card_id='62', card_name='クロフネ', card_text='日本競馬のダート最強馬最有力。たった二戦でダート界の伝説になった', image_uri='https://takeyutakafun.xyz/wp-content/uploads/2017/05/kurofune3.jpg', maker='Derby0211', attack='350', defense='400';
INSERT INTO cards SET card_id='63', card_name='オルフェーブル', card_text='平成の暴君。騎手を振り落とすやんちゃっ子は三冠で世代最強を証明した', image_uri='https://realkeibamusou.com/wp-content/uploads/2016/09/@-4.jpg', maker='Derby0211', attack='500', defense='200';
INSERT INTO cards SET card_id='64', card_name='キタサンブラック', card_text='つい最近まで現役で走っていた日本最強馬。北島三郎の最高傑作。', image_uri='https://www.keibalab.jp/img/upload/topics/201704/170430_kitasanblack.jpg', maker='Derby0211', attack='400', defense='300';
INSERT INTO cards SET card_id='65', card_name='ゴドルフィンアラビアン', card_text='すべてのサラブレットの始祖の三頭のうちの一頭。', image_uri='https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Godolphin_Arabian.jpg/230px-Godolphin_Arabian.jpg', maker='Derby0211', attack='10000', defense='10000';
INSERT INTO cards SET card_id='66', card_name='ピク里先輩', card_text='隠れてないピクミン', image_uri='https://pbs.twimg.com/media/DqpdjUUVAAEctt2.jpg:large', maker='イニシャルG', attack='5', defense='500';
INSERT INTO cards SET card_id='67', card_name='ピク里先輩_2', card_text='大御所のピクミン', image_uri='https://pbs.twimg.com/media/Dp1xd03VsAAaZ0Q.jpg', maker='イニシャルG', attack='1000', defense='2';
INSERT INTO cards SET card_id='68', card_name='ピク里先輩_3', card_text='何かに目覚めるピクミン', image_uri='https://pbs.twimg.com/media/Dp1xjCCUcAATw5K.jpg', maker='イニシャルG', attack='1', defense='1';
INSERT INTO cards SET card_id='69', card_name='ピク里先輩_4', card_text='脱皮', image_uri='https://pbs.twimg.com/media/DpUPeqfVAAEMb1B.jpg', maker='イニシャルG', attack='0', defense='0';
INSERT INTO cards SET card_id='70', card_name='ピク里先輩_5', card_text='ビクッ', image_uri='https://pbs.twimg.com/media/DpUAFr8UcAAtWji.jpg', maker='イニシャルG', attack='1000000', defense='1000000';
INSERT INTO cards SET card_id='71', card_name='某T君', card_text='忘れてたけど誕おめ', image_uri='https://pbs.twimg.com/media/DNvLQPNUIAAylX8.jpg', maker='イニシャルG', attack='8888', defense='8888';
INSERT INTO cards SET card_id='72', card_name='社畜', card_text='みんなのアイドル☆', image_uri='https://pbs.twimg.com/media/DNvF2ceUQAE5650.jpg', maker='イニシャルG', attack='0', defense='0';
INSERT INTO cards SET card_id='73', card_name='月曜日が怖い', card_text='みんな楽したいんだよ', image_uri='https://pbs.twimg.com/profile_images/482351856836804609/ZewZqH-O_400x400.jpeg', maker='イニシャルG', attack='1000', defense='10000';
INSERT INTO cards SET card_id='74', card_name='ミ↑ミ↓', card_text='皆の敵、12＋とか絶対嘘だゾ。13+ゾ。', image_uri='', maker='masapo', attack='114', defense='514';
INSERT INTO cards SET card_id='75', card_name='ギーゼグール', card_text='皆の敵その2、BPM357、すきやき奉行ゾ。', image_uri='', maker='masapo', attack='1919', defense='810';
INSERT INTO cards SET card_id='76', card_name='リリィ', card_text='皆の敵その3、鳥のアタ許容3とかふざけてるゾ', image_uri='', maker='masapo', attack='364', defense='364';
INSERT INTO cards SET card_id='77', card_name='ローズマリー', card_text='皆の敵その４、音ゲーなのに運ゲーだゾ。', image_uri='', maker='masapo', attack='114', defense='514';
INSERT INTO cards SET card_id='78', card_name='八咫烏鋼太郎', card_text='かわいい、みさくらなんこつゾ。', image_uri='', maker='masapo', attack='364', defense='364';
INSERT INTO cards SET card_id='79', card_name='マクドナルド', card_text='地方によって略称が異なる', image_uri='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZU12wAIs-tdsasX1voOpjESbq4kjIoDE_jTNmj2jjed-4kot_Iw', maker='K', attack='100', defense='0';
INSERT INTO cards SET card_id='80', card_name='KFC', card_text='ケンタッキーフライドチキンからKFCにイメージ戦略で名称が変更された', image_uri='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk2H80kXbxlIuwiz0h57w7lbnZMba2laV68olMvr9YMRHAfx2B1Q', maker='K', attack='300', defense='0';
INSERT INTO cards SET card_id='81', card_name='ウェンディーズ', card_text='開業当初では珍しいオーダーメイドシステムを導入', image_uri='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSikisZIWgMjJ7vHDH7TzkcBcVlUq_74yf25GkFL1Spg8sbqGrY7Q', maker='K', attack='400', defense='300';
INSERT INTO cards SET card_id='82', card_name='ガチャピン&ムック', card_text='永遠の5歳', image_uri='https://www.zakzak.co.jp/images/news/180214/ent1802145516-m1.jpg', maker='K', attack='500', defense='500';
INSERT INTO cards SET card_id='83', card_name='ストレッチマン', card_text='NHK教育テレビ（NHK Eテレ）で放送されていた特別支援学校・特別支援学級向けの学校放送番組の主人公', image_uri='http://cyoppaya.com/wp-content/uploads/2017/08/Unknown-16.jpeg', maker='K', attack='2000', defense='1000';
INSERT INTO cards SET card_id='84', card_name='無個性', card_text='どんどん増殖してゆく自身の形を失った者たち。「次は君の番だ」', image_uri='http://buzz-netnews.com/wp-content/uploads/2015/10/58_foodcube00-e1446463160888.jpg', maker='miku', attack='600', defense='200';
INSERT INTO cards SET card_id='85', card_name='みかみか', card_text='攻撃されないと攻撃しない。ペットとして飼われる事多数', image_uri='http://eventsnews.info/wp-content/uploads/2015/12/gazou002125.jpg', maker='miku', attack='10', defense='10';
INSERT INTO cards SET card_id='86', card_name='マガイモノ', card_text='見た目に惑わされてはいけない', image_uri='https://isuta.jp/wp-content/uploads/2015/10/vanessamckeown-7.jpg', maker='miku', attack='100', defense='100';
INSERT INTO cards SET card_id='87', card_name='喰い物', card_text='彼の視界に入ったら終わりと思え。', image_uri='http://livedoor.blogimg.jp/blog_owner-mesopota/imgs/6/e/6e413a7e.jpg', maker='miku', attack='10000', defense='9500';


-- がちゃテーブル
CREATE TABLE gachas (
    gacha_type VARBINARY(128) NOT NULL COMMENT 'がちゃタイプ',
    card_id BIGINT UNSIGNED NOT NULL COMMENT 'カードID',
    probability INT UNSIGNED NOT NULL COMMENT '確率',
    INDEX idx_gacha_type (gacha_type), -- gacha_typeで検索する可能性が高いのでindexを切る
    FOREIGN KEY (card_id) REFERENCES cards(card_id), -- 存在しないカードは困るので紐づけておく
    PRIMARY KEY(gacha_type, card_id)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが１種類のカードを意味するテーブル';

gacha_type	card_id	probability
nomal	1	15
nomal	2	10
nomal	3	8
nomal	4	7
nomal	5	5
nomal	6	5
nomal	7	5
nomal	8	5
nomal	9	5
nomal	10	5
nomal	11	5
nomal	12	5
nomal	13	5
nomal	14	5
nomal	15	5
nomal	16	3
nomal	17	2

INSERT INTO gachas SET gacha_type='nomal', card_id='1', probability='15';
INSERT INTO gachas SET gacha_type='nomal', card_id='2', probability='10';
INSERT INTO gachas SET gacha_type='nomal', card_id='3', probability='8';
INSERT INTO gachas SET gacha_type='nomal', card_id='4', probability='7';
INSERT INTO gachas SET gacha_type='nomal', card_id='5', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='6', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='7', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='8', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='9', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='10', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='11', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='12', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='13', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='14', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='15', probability='5';
INSERT INTO gachas SET gacha_type='nomal', card_id='16', probability='3';
INSERT INTO gachas SET gacha_type='nomal', card_id='17', probability='2';

INSERT INTO gachas SET gacha_type='nomal_1', card_id='72', probability='20';
INSERT INTO gachas SET gacha_type='nomal_1', card_id='58', probability='20';
INSERT INTO gachas SET gacha_type='nomal_1', card_id='41', probability='15';
INSERT INTO gachas SET gacha_type='nomal_1', card_id='47', probability='15';
INSERT INTO gachas SET gacha_type='nomal_1', card_id='23', probability='10';
INSERT INTO gachas SET gacha_type='nomal_1', card_id='20', probability='10';
INSERT INTO gachas SET gacha_type='nomal_1', card_id='5', probability='5';
INSERT INTO gachas SET gacha_type='nomal_1', card_id='2', probability='5';

INSERT INTO gachas SET gacha_type='nomal_2', card_id='8', probability='20';
INSERT INTO gachas SET gacha_type='nomal_2', card_id='31', probability='20';
INSERT INTO gachas SET gacha_type='nomal_2', card_id='18', probability='15';
INSERT INTO gachas SET gacha_type='nomal_2', card_id='25', probability='15';
INSERT INTO gachas SET gacha_type='nomal_2', card_id='51', probability='10';
INSERT INTO gachas SET gacha_type='nomal_2', card_id='55', probability='10';
INSERT INTO gachas SET gacha_type='nomal_2', card_id='27', probability='5';
INSERT INTO gachas SET gacha_type='nomal_2', card_id='81', probability='5';

INSERT INTO gachas SET gacha_type='nomal_3', card_id='56', probability='20';
INSERT INTO gachas SET gacha_type='nomal_3', card_id='4', probability='20';
INSERT INTO gachas SET gacha_type='nomal_3', card_id='84', probability='15';
INSERT INTO gachas SET gacha_type='nomal_3', card_id='43', probability='15';
INSERT INTO gachas SET gacha_type='nomal_3', card_id='21', probability='10';
INSERT INTO gachas SET gacha_type='nomal_3', card_id='76', probability='10';
INSERT INTO gachas SET gacha_type='nomal_3', card_id='85', probability='5';
INSERT INTO gachas SET gacha_type='nomal_3', card_id='62', probability='5';

INSERT INTO gachas SET gacha_type='nomal_4', card_id='59', probability='20';
INSERT INTO gachas SET gacha_type='nomal_4', card_id='1', probability='20';
INSERT INTO gachas SET gacha_type='nomal_4', card_id='69', probability='15';
INSERT INTO gachas SET gacha_type='nomal_4', card_id='77', probability='15';
INSERT INTO gachas SET gacha_type='nomal_4', card_id='38', probability='10';
INSERT INTO gachas SET gacha_type='nomal_4', card_id='16', probability='10';
INSERT INTO gachas SET gacha_type='nomal_4', card_id='15', probability='5';
INSERT INTO gachas SET gacha_type='nomal_4', card_id='66', probability='5';

INSERT INTO gachas SET gacha_type='nomal_5', card_id='3', probability='20';
INSERT INTO gachas SET gacha_type='nomal_5', card_id='13', probability='20';
INSERT INTO gachas SET gacha_type='nomal_5', card_id='28', probability='15';
INSERT INTO gachas SET gacha_type='nomal_5', card_id='29', probability='15';
INSERT INTO gachas SET gacha_type='nomal_5', card_id='14', probability='10';
INSERT INTO gachas SET gacha_type='nomal_5', card_id='49', probability='10';
INSERT INTO gachas SET gacha_type='nomal_5', card_id='71', probability='5';
INSERT INTO gachas SET gacha_type='nomal_5', card_id='7', probability='5';

INSERT INTO gachas SET gacha_type='nomal_6', card_id='11', probability='20';
INSERT INTO gachas SET gacha_type='nomal_6', card_id='33', probability='20';
INSERT INTO gachas SET gacha_type='nomal_6', card_id='75', probability='15';
INSERT INTO gachas SET gacha_type='nomal_6', card_id='10', probability='15';
INSERT INTO gachas SET gacha_type='nomal_6', card_id='57', probability='10';
INSERT INTO gachas SET gacha_type='nomal_6', card_id='74', probability='10';
INSERT INTO gachas SET gacha_type='nomal_6', card_id='60', probability='5';
INSERT INTO gachas SET gacha_type='nomal_6', card_id='65', probability='5';

INSERT INTO gachas SET gacha_type='nomal_7', card_id='26', probability='20';
INSERT INTO gachas SET gacha_type='nomal_7', card_id='86', probability='20';
INSERT INTO gachas SET gacha_type='nomal_7', card_id='34', probability='15';
INSERT INTO gachas SET gacha_type='nomal_7', card_id='53', probability='15';
INSERT INTO gachas SET gacha_type='nomal_7', card_id='63', probability='10';
INSERT INTO gachas SET gacha_type='nomal_7', card_id='12', probability='10';
INSERT INTO gachas SET gacha_type='nomal_7', card_id='36', probability='5';
INSERT INTO gachas SET gacha_type='nomal_7', card_id='22', probability='5';

INSERT INTO gachas SET gacha_type='nomal_8', card_id='79', probability='20';
INSERT INTO gachas SET gacha_type='nomal_8', card_id='78', probability='20';
INSERT INTO gachas SET gacha_type='nomal_8', card_id='80', probability='15';
INSERT INTO gachas SET gacha_type='nomal_8', card_id='67', probability='15';
INSERT INTO gachas SET gacha_type='nomal_8', card_id='68', probability='10';
INSERT INTO gachas SET gacha_type='nomal_8', card_id='17', probability='10';
INSERT INTO gachas SET gacha_type='nomal_8', card_id='42', probability='5';
INSERT INTO gachas SET gacha_type='nomal_8', card_id='61', probability='5';

INSERT INTO gachas SET gacha_type='nomal_9', card_id='6', probability='20';
INSERT INTO gachas SET gacha_type='nomal_9', card_id='40', probability='20';
INSERT INTO gachas SET gacha_type='nomal_9', card_id='32', probability='15';
INSERT INTO gachas SET gacha_type='nomal_9', card_id='64', probability='15';
INSERT INTO gachas SET gacha_type='nomal_9', card_id='52', probability='10';
INSERT INTO gachas SET gacha_type='nomal_9', card_id='45', probability='10';
INSERT INTO gachas SET gacha_type='nomal_9', card_id='87', probability='5';
INSERT INTO gachas SET gacha_type='nomal_9', card_id='50', probability='5';

INSERT INTO gachas SET gacha_type='nomal_10', card_id='37', probability='20';
INSERT INTO gachas SET gacha_type='nomal_10', card_id='19', probability='20';
INSERT INTO gachas SET gacha_type='nomal_10', card_id='48', probability='15';
INSERT INTO gachas SET gacha_type='nomal_10', card_id='83', probability='15';
INSERT INTO gachas SET gacha_type='nomal_10', card_id='46', probability='10';
INSERT INTO gachas SET gacha_type='nomal_10', card_id='77', probability='10';
INSERT INTO gachas SET gacha_type='nomal_10', card_id='30', probability='5';
INSERT INTO gachas SET gacha_type='nomal_10', card_id='44', probability='5';

INSERT INTO gachas SET gacha_type='nomal_11', card_id='70', probability='20';
INSERT INTO gachas SET gacha_type='nomal_11', card_id='73', probability='20';
INSERT INTO gachas SET gacha_type='nomal_11', card_id='39', probability='15';
INSERT INTO gachas SET gacha_type='nomal_11', card_id='54', probability='15';
INSERT INTO gachas SET gacha_type='nomal_11', card_id='24', probability='10';
INSERT INTO gachas SET gacha_type='nomal_11', card_id='9', probability='10';
INSERT INTO gachas SET gacha_type='nomal_11', card_id='35', probability='5';
INSERT INTO gachas SET gacha_type='nomal_11', card_id='82', probability='5';

-- ユーザが所持するカード情報
CREATE TABLE user_cards (
    user_card_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ユーザID',
    user_id BIGINT UNSIGNED NOT NULL COMMENT 'ユーザID',
    card_id BIGINT UNSIGNED NOT NULL COMMENT 'カードID',
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (card_id) REFERENCES cards(card_id),
    PRIMARY KEY(user_card_id)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='1レコードが１ユーザ所持する１枚のカードを意味するテーブル';

-- デイリーガチャ用テーブル
DROP TABLE daily;
CREATE TABLE daily (
    user_id BIGINT UNSIGNED NOT NULL,
    loot_date DATE NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    PRIMARY KEY(user_id, loot_date)
);


