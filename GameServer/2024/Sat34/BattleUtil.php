<?php  // BattleUtil.php

class BattleUtil {
    const SESSION_KEY_BATTLE = "battle";
    const SESSION_KEY_PC = "pc";
    const SESSION_KEY_NPC = "npc";

    // データ保存
    public static function save($pc, $npc) {
        $_SESSION[self::SESSION_KEY_BATTLE][self::SESSION_KEY_PC] = $pc;
        $_SESSION[self::SESSION_KEY_BATTLE][self::SESSION_KEY_NPC] = $npc;
    }

    // PCとNPCの情報取得
    public static function get(): object|null {
        $pc = $_SESSION[self::SESSION_KEY_BATTLE][self::SESSION_KEY_PC] ?? null;
        $npc = $_SESSION[self::SESSION_KEY_BATTLE][self::SESSION_KEY_NPC] ?? null;
        if (null === $pc || null === $npc) {
            return null;
        }

        return new class($pc, $npc) {
            public function __construct(
                public readonly BattlePc $pc,
                public readonly BattlePc $npc,
            ) {}
        };
    }

}
