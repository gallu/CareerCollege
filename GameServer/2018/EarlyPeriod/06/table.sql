テーブル

プレイヤー (
	部屋番号
	色              INT, -- idで扱う
	所持金          INT,
	小麦の独占状況  INT,
	布の独占状況    INT,
	毛皮の独占状況  INT,
	染料の独占状況  INT,
	薬草の独占状況  INT,
);

種類マスタ (
	種類ID  INT,
	種類名(布とか毛皮とか) VARCHAR(..),
);
タイル (
	タイルID  INT  PRIMARY KEY,-- 1～36
	種類ID    INT,
	点数      INT,
);

船 (
	部屋番号
	プレーヤー色  INT,
	積み荷1       INT, -- タイルID
	積み荷2       INT,
	積み荷3       INT,
	積み荷4       INT,
	積み荷5       INT,
);

船正規化 ( -- 多分、あんまりやらない
	プレーヤー色  INT,
	積み荷番号    INT,
	積み荷        INT, -- タイルID
);


