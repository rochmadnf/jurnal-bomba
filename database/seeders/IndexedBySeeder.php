<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IndexedBySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indexedBies = collect(
            [
                [
                    "name"    => "sinta",
                    "url"     => "#",
                    "order"   => 1,
                    "version" => Str::uuid(),
                    "width"   => 13,
                ],
                [
                    "name"    => "graba-rujukan-digital",
                    "url"     => "#",
                    "order"   => 2,
                    "version" => Str::uuid(),
                    "width"   => 17,
                ],
                [
                    "name"    => "indonesia-one-search",
                    "url"     => "#",
                    "order"   => 3,
                    "version" => Str::uuid(),
                    "width"   => 13,
                ],
                [
                    "name"    => "doi",
                    "url"     => "#",
                    "order"   => 4,
                    "version" => Str::uuid(),
                    "width"   => 9,
                ],
                [
                    "name"    => "crossref",
                    "url"     => "#",
                    "order"   => 5,
                    "version" => Str::uuid(),
                    "width"   => 11,
                ],
            ]
        );

        $indexedBies->each(function ($by) {
            \App\Models\Master\IndexedBy::create($by);
        });
    }
}
