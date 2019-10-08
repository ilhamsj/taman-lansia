<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'title' => $title,
        'slug' => Str::slug($title),
        'description' => $faker->text,
        'category' => $faker->randomElement([
            'kegiatan', 'berita',
        ]),
        'image' => $faker->randomElement([
            "2MecKOZceFPcneFoF8xjPVRcUEgh7Ep9e9J8cjM8.jpeg",
            "2Nmes4hiSu5LpHYUcHODLiGHBFTsTz9wOmXE0kmz.jpeg",
            "2xJjobZuAyvWkKrd8VBGvJaoNalwvQC9E0AFSfyi.png",
            "aRXZpTn8SEaXx0Lc1OYnJvKNWnKWixtPGn2VcTjX.jpeg",
            "axiS6mBgW28OWFApZj99Ie92DuZnSY7v5FXR5vSX.jpeg",
            "bZygU6g0EdKCb8Nfr5AdcuDOYINalFJKzMIw43uT.jpeg",
            "D4ci4aMQOAeJh7O2fGNeyZIb91KHLbNOFZCEGl4B.jpeg",
            "Es6eK62q70qERz23N3gmGfo7tBcZajHyW68RhrC4.png",
            "HP51bh2Nl6NZcD2fJCCPXGlAVEYBPDpvitNldun1.png",
            "HWOFS9pwc20jJeeL9NGMSHxh77wpJndNBOQDXAKb.jpeg",
            "K5yuwE5mq3Qv5OI4hrmp0p7yF9FC7C8VEKKZI7Zx.jpeg",
            "oLGzRM8buuVGIMrVPTXJpSWHTzSRYBfs8wViLExN.png",
            "PxoMxODMKXwWPI4VIEzWxErqVPvj3dF2RTd265rZ.jpeg",
            "stAslVOokS408vIdifbhhCnh4KkjST779pcMLYKr.jpeg",
            "SYHvJGxyEEfCGzpmgNNfLv5sUpu4UcOh8BKuIpcD.jpeg",
            "tfIrz42RJMLM0BVhr6B8ZClFf7DYm4mmg5a4Asu8.png",
            "Uqqcl1zFFzzLxnkrXFp9IXDVsYG7IeoOxbSibyGw.jpeg",
            "W92Zm5JKXBUeBwtO12q4os3XQwKKYOWqBeEy1EQa.jpeg",
            "XAIm1qcjImf4mGahHkO6lfbq7DokpZI3Xt8xWcRl.jpeg",
            "xBdk3DJ2nY1B1Qozzbv6bHtrZPinr9S8WBbI0Fmi.jpeg",
            "xxk79oIZ5o0JVSYEBFUGHa61HAaRJQeaEbyxQ6sS.jpeg",
            "XyxvrnAXJNOlBivsX7tDnNIWftuTNgS3U9F75Pft.png",
            "YVlU131GwDRSG9W3x2zm8AVw1urd2xdKMWYe83Ys.jpeg",
            "ZJvCKPaAFdvwmIglXbBSAXBIXyPgq1l1EUd9fqMv.png",
            "ZqZaIwuJUUxmf7GCkG1IKx9YgZG5tj6cWWiC2P6A.png",
        ]),
    ];
});
