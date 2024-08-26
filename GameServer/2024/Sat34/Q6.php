<?php  // Q6.php
/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

一部、 class14.php で作ったクラスを使用します。

クラス名 PC
    プロパティ
        Weaponクラス型 weapon
        Armorクラス型 armor

    メソッド
        equipWeapon()
        equipArmor()
    (引数と処理は「妥当な内容」にしてください)

仕様として
・weaponプロパティにインスタンスが入っている場合「その武器を装備している」と見なします
・armorプロパティにインスタンスが入っている場合「その鎧を装備している」と見なします

----
PCインスタンスを作成した後
・武器として「青銅の剣(または任意で好きな武器)」
・鎧として「フルプレート(または任意で好きな鎧)」
を装備させた後、PCインスタンスをvar_dumpで出力しなさい。
 */
require_once __DIR__ . "/class14.php" ;

class PC {
    private Weapon $weapon;
    private Armor $armor;

    public function equipWeapon(Weapon $w) {
        $this->weapon = $w;
    }
    public function equipArmor(Armor $a) {
        $this->armor = $a;
    }
}

$pc = new PC();

$weapon = new Weapon("青銅の剣", 120, 100);
$pc->equipWeapon($weapon);

$armor = new Armor("フルプレート", 600, 200);
$pc->equipArmor($armor);

var_dump($pc);
