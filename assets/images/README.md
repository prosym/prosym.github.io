プログラミング・シンポジウム関連画像ファイル
=============================================

シンボルマーク (ロゴ)
----------------------

### PostScript

オリジナル。第39回プログラミング・シンポジウム報告集より「第39回プログラミング・シンポジウム開催に際して」を参照のこと。

### SVG

PostScript 版から手動で作成。

### PNG

SVG 版を ImageMagick 7.1.0-19 を用いて変換。

```
$ convert -version
Version: ImageMagick 7.1.0-19 Q16-HDRI x86_64 2021-12-22 https://imagemagick.org
Copyright: (C) 1999-2021 ImageMagick Studio LLC
License: https://imagemagick.org/script/license.php
Features: Cipher DPC HDRI OpenMP(4.5) 
Delegates (built-in): cairo fontconfig freetype png rsvg x zlib
Compiler: gcc (9.3)
```

```
$ convert -verbose prosym2_white_square.svg -define png:color-type=0 -define png:bit-depth=8 -define png:compression-filter=1 -define png:exclude-chunk="tEXt,zEXt,tIME" -strip -resize 16x16 prosym2_white_16x16.png
'inkscape' '/tmp/magick-u5SPpSTMRpamp71cJmIViBmMGN9KM9AT' --export-filename='/tmp/magick-f-NuHOWs8Cwtcup1QCTUoEZtDrTwo4QT.png' --export-dpi='96' --export-background='rgb(100%,100%,100%)' --export-background-opacity='0.99999999999900002212' > '/tmp/magick-wF7j39E1vZ54xFkbh7OqgeioQPtHUi8W' 2>&1
prosym2_white_square.svg SVG 760x760 760x760+0+0 16-bit sRGB 1002B 0.020u 0:00.022
prosym2_white_square.svg=>prosym2_white_16x16.png SVG 760x760=>16x16 16x16+0+0 16-bit sRGB 1002B 0.030u 0:00.031
```

```
$ convert -verbose prosym2_white_square.svg -define png:color-type=0 -define png:bit-depth=8 -define png:compression-filter=1 -define png:exclude-chunk="tEXt,zEXt,tIME" -strip -resize 32x32 prosym2_white_32x32.png
'inkscape' '/tmp/magick-YnbeLrl1zvsVIqcqizwJkApqM2DCfxne' --export-filename='/tmp/magick--vHgCUVH-qDCz8izpZt8ZLhHbrnEZSNh.png' --export-dpi='96' --export-background='rgb(100%,100%,100%)' --export-background-opacity='0.99999999999900002212' > '/tmp/magick-R02TVoutjodpAvc6g1ynVk31OeYk0LCf' 2>&1
prosym2_white_square.svg SVG 760x760 760x760+0+0 16-bit sRGB 1002B 0.020u 0:00.022
prosym2_white_square.svg=>prosym2_white_32x32.png SVG 760x760=>32x32 32x32+0+0 16-bit sRGB 1002B 0.030u 0:00.027
```

```
$ convert -verbose prosym2_white_square.svg -define png:color-type=0 -define png:bit-depth=8 -define png:compression-filter=1 -define png:exclude-chunk="tEXt,zEXt,tIME" -strip -resize 48x48 prosym2_white_48x48.png
'inkscape' '/tmp/magick-UuwaglKa5mH-g6e40y7gkfLf0MKLOFxW' --export-filename='/tmp/magick-I53gN2QOb-gnkQHkjzTkpvCQ5sPL2z4W.png' --export-dpi='96' --export-background='rgb(100%,100%,100%)' --export-background-opacity='0.99999999999900002212' > '/tmp/magick-GaHXP7LFrxqe7O1mSdgUDu_XeCe8XeOV' 2>&1
prosym2_white_square.svg SVG 760x760 760x760+0+0 16-bit sRGB 1002B 0.020u 0:00.021
prosym2_white_square.svg=>prosym2_white_48x48.png SVG 760x760=>48x48 48x48+0+0 16-bit sRGB 1002B 0.030u 0:00.026
```

```
$ convert -verbose prosym2_white_square.svg -define png:color-type=0 -define png:bit-depth=8 -define png:compression-filter=1 -define png:exclude-chunk="tEXt,zEXt,tIME" -strip -resize 180x180 prosym2_white_180x180.png
'inkscape' '/tmp/magick-2AyA1gE14WgIyNXXbAphoxwxryxbwhT3' --export-filename='/tmp/magick-aVO97cPtkMNV1OG1IBQtjjxERyDhbj86.png' --export-dpi='96' --export-background='rgb(100%,100%,100%)' --export-background-opacity='0.99999999999900002212' > '/tmp/magick-3e7Mia1lHFwJh7twFuuyO5he1TY48W63' 2>&1
prosym2_white_square.svg SVG 760x760 760x760+0+0 16-bit sRGB 1002B 0.020u 0:00.021
prosym2_white_square.svg=>prosym2_white_180x180.png SVG 760x760=>180x180 180x180+0+0 16-bit sRGB 1002B 0.030u 0:00.017
```

```
$ convert -verbose prosym2_white_square.svg -define png:color-type=0 -define png:bit-depth=8 -define png:compression-filter=1 -define png:exclude-chunk="tEXt,zEXt,tIME" -strip -resize 192x192 prosym2_white_192x192.png
'inkscape' '/tmp/magick-vqs1ExLZWsy2zkE8jrzi-skdTLYKaiJK' --export-filename='/tmp/magick-DXuCzFFS2aIuZ8VhkkGd8r4kLevMZVNK.png' --export-dpi='96' --export-background='rgb(100%,100%,100%)' --export-background-opacity='0.99999999999900002212' > '/tmp/magick-NsSIdDr7cOaVvoZ4uTi_6A33LZDDLerK' 2>&1
prosym2_white_square.svg SVG 760x760 760x760+0+0 16-bit sRGB 1002B 0.030u 0:00.029
prosym2_white_square.svg=>prosym2_white_192x192.png SVG 760x760=>192x192 192x192+0+0 16-bit sRGB 1002B 0.030u 0:00.013
```

```
$ convert -verbose prosym2_white_square.svg -define png:color-type=0 -define png:bit-depth=8 -define png:compression-filter=1 -define png:exclude-chunk="tEXt,zEXt,tIME" -strip -resize 200x200 prosym2_white_200x200.png
'inkscape' '/tmp/magick-L4pV5tDcTDDNgza0xVeYQL_Ud5diJWoi' --export-filename='/tmp/magick-68WYIhmiLiSCL6F9JnbnxE4jzHvVULPh.png' --export-dpi='96' --export-background='rgb(100%,100%,100%)' --export-background-opacity='0.99999999999900002212' > '/tmp/magick-w61jjD368QomQjWDpqrDUTjX0vK12hji' 2>&1
prosym2_white_square.svg SVG 760x760 760x760+0+0 16-bit sRGB 1002B 0.040u 0:00.060
prosym2_white_square.svg=>prosym2_white_200x200.png SVG 760x760=>200x200 200x200+0+0 16-bit sRGB 1002B 0.050u 0:00.018
```

```
$ convert -verbose prosym2_white_square.svg -define png:color-type=0 -define png:bit-depth=8 -define png:compression-filter=1 -define png:exclude-chunk="tEXt,zEXt,tIME" -strip -resize 512x512 prosym2_white_512x512.png
'inkscape' '/tmp/magick-R0IQRo_krH_yykj3OOUQ3c4PmgnTsbyA' --export-filename='/tmp/magick-tEOztuJHhJw506bVBnAgy24xTseO3Ggz.png' --export-dpi='96' --export-background='rgb(100%,100%,100%)' --export-background-opacity='0.99999999999900002212' > '/tmp/magick-61W5ex2clF6QWSmomR359a934zWtx1BB' 2>&1
prosym2_white_square.svg SVG 760x760 760x760+0+0 16-bit sRGB 1002B 0.030u 0:00.022
prosym2_white_square.svg=>prosym2_white_512x512.png SVG 760x760=>512x512 512x512+0+0 16-bit sRGB 1002B 0.150u 0:00.025
```

```
$ convert -verbose prosym2_white_circle.svg -define png:color-type=0 -define png:bit-depth=8 -define png:compression-filter=1 -define png:exclude-chunk="tEXt,zEXt,tIME" -strip -resize 512x512 prosym2_white_circle_512x512.png
'inkscape' '/tmp/magick-B1hSsfaahJfEJOet-Y_odZj-Pl0eBHvz' --export-filename='/tmp/magick-wtfHSwr2k6Utmcz0OAwZsQqxMDpR4ujB.png' --export-dpi='96' --export-background='rgb(100%,100%,100%)' --export-background-opacity='0.99999999999900002212' > '/tmp/magick-NQotaPsJE8182NKRX46cTTkn-V7ZCCEA' 2>&1
prosym2_white_circle.svg SVG 960x960 960x960+0+0 16-bit sRGB 987B 0.040u 0:00.074
prosym2_white_circle.svg=>prosym2_white_circle_512x512.png SVG 960x960=>512x512 512x512+0+0 16-bit sRGB 987B 0.230u 0:00.045
```
