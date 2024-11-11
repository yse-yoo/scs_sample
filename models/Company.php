<?php
class Company
{
    function fetch($id)
    {
        // TODO: Database
        $values = $this->getList();
        foreach ($values as $tour) {
            if ($tour['id'] == $id) {
                return $tour;
            }
        }
    }

    function getList()
    {
        // TODO: Database
        $values = [
            [
                "id" => 1,
                "name" => "JTB",
            ],
            [
                "id" => 2,
                "name" => "日本丸メモリアルパークツアー",
            ],
            [
                "id" => 3,
                "name" => "横浜ハンマーベットツアー",
            ],
            [
                "id" => 4,
                "name" => "MARINE&WALK YOKOHAMツアー",
            ],
            [
                "id" => 5,
                "name" => "横浜赤レンガ倉庫ツアー",
            ],
            [
                "id" => 6,
                "name" => "カップヌードルミュージアムツアー",
            ],
        ];
        return $values;
    }
}
