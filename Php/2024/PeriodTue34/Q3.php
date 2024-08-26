<?php  // Q3.php

/*
 乱数で年齢を作成します。
 20歳以上なら「成人」、20歳未満なら「未成年」と出力しなさい。
 */
$age = random_int(0, 40);
if ($age >= 20) {
    echo "成人 <br>";
} else {
    echo "未成年 <br>";
}

if ($age < 20) {
    echo "未成年 <br>";
} else {
    echo "成人 <br>";
}

/*
 乱数で「会員状態」を作成します。0なら非会員、1なら会員とします。
 非会員なら「1000円」、会員なら「500円」と出力しなさい。
 */
$member_status = random_int(0, 1);
if (0 === $member_status) {
    echo "1000円 <br>";
} else {
    echo "500円 <br>";
}


/*
 乱数で年齢と会員状態を作成します。
 会員状態は、0なら非会員、1なら会員とします。
 値段は「20歳以上の会員は1100円、非会員は1500円」「20歳未満の会員は500円、非会員は800円」です。
 値段を出力しなさい。
 */
$age = random_int(0, 40);
$member_status = random_int(0, 1);

if ($age >= 20 and 1 === $member_status) {
    echo "1100円";
} elseif ($age >= 20 && 0 === $member_status) {
    echo "1500円";
} elseif ($age < 20 && 1 === $member_status) {
    echo "500円";
} else {
    echo "800円";
}

if ($age >= 20) {
    if (1 === $member_status) {
        echo "1100円";
    } else {
        echo "1500円";
    }
} else {
    if (1 === $member_status) {
        echo "500円";
    } else {
        echo "800円";
    }
}











