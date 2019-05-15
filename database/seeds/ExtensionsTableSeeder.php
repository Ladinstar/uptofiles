<?php

use Illuminate\Database\Seeder;
use App\Extension;

class ExtensionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extension  = New Extension();
        $extension->name = 'pdf';
        $extension->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sed ipsa voluptatibus voluptate neque! Quae eius dolorum nobis quaerat, corporis debitis eaque soluta nulla dolor ipsum voluptate vero eos! Minima.';
        $extension->icon = 'pdf.png';
        $extension->icon_bg = 'pdf_bg.png';
        $extension->save();

        $extension  = New Extension();
        $extension->name = 'docx';
        $extension->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sed ipsa voluptatibus voluptate neque! Quae eius dolorum nobis quaerat, corporis debitis eaque soluta nulla dolor ipsum voluptate vero eos! Minima.';
        $extension->icon = 'docx.png';
        $extension->icon_bg = 'docx_bg.png';
        $extension->save();

        $extension  = New Extension();
        $extension->name = 'pptx';
        $extension->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sed ipsa voluptatibus voluptate neque! Quae eius dolorum nobis quaerat, corporis debitis eaque soluta nulla dolor ipsum voluptate vero eos! Minima.';
        $extension->icon = 'pptx.png';
        $extension->icon_bg = 'pptx_bg.png';
        $extension->save();

        $extension  = New Extension();
        $extension->name = 'zip';
        $extension->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sed ipsa voluptatibus voluptate neque! Quae eius dolorum nobis quaerat, corporis debitis eaque soluta nulla dolor ipsum voluptate vero eos! Minima.';
        $extension->icon = 'zip.png';
        $extension->icon_bg = 'zip_bg.png';
        $extension->save();

        $extension  = New Extension();
        $extension->name = 'rar';
        $extension->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sed ipsa voluptatibus voluptate neque! Quae eius dolorum nobis quaerat, corporis debitis eaque soluta nulla dolor ipsum voluptate vero eos! Minima.';
        $extension->icon = 'rar.png';
        $extension->icon_bg = 'rar_bg.png';
        $extension->save();
    }
}
