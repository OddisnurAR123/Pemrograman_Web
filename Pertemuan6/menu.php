<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

// Soal 11
//membuat fungsi untuk menampilkan array utama
/*function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
    echo "<li>{$item['nama']}</li>";
    }
    echo "</ul>";
    
}
    
    tampilkanMenuBertingkat($menu);*/

// Soal 12
//membuat fungsi menjadi rekursif dengan memanggil dirinya sendiri ketika suatu item dari menu memiliki attribut subMenu.
function tampilkanMenuBertingkat(array $menu, $level = 0) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>";
        if (isset($item['subMenu'])) {
            echo "{$item['nama']}</a>";
            tampilkanMenuBertingkat($item['subMenu'], $level + 1);
        } else {
            echo "{$item['nama']}</a>";
        }
        echo "</li>";
    }
    echo "</ul>";
}

//menampilkan menu
tampilkanMenuBertingkat($menu);
?>