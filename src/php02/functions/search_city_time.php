<?php

// ⬇️「都市名をもらって、その都市の情報＋今の時刻をセットにして返す関数」

// 👇関数の定義。$city_name➡️引数／「都市名を受け取る箱」をここで準備している感じ
// ➡️$city_nameには、受け取った都市名が入っている。
function searchCityTime($city_name)
{
    // search_city_time.phpファイルに cities.phpファイルを読み込ませる。⬇️
    require('config/cities.php');
    // 都市データを1個ずつ順番に取り出してね
    foreach ($cities as $city) {
        // 「今見てる都市の名前と、探してる名前が一致したら？」一致した時だけ中に入っている情報を開ける。
        if ($city['name'] === $city_name) {

            $date_time = new DateTime('', new DateTimeZone($city["time_zone"]));
            // 時刻を「15：30」みたいな形で表示してね。
            $time = $date_time->format('H:i');
            // 都市データにtimeを追加します。(配列に新しい情報を足した。)
            $city['time'] = $time;

            // 👇完成した都市データを外に返す。returnすることで関数は終了！になる
            return $city;
        }
    }
}

//  都市名をもらう➡️都市データ一覧を読み込む
// ➡️一個ずつ都市をチェック➡️名前が一致したら
// ➡️その都市の今の時間を計算➡️都市データに時間を追加
// ➡️それを返す
