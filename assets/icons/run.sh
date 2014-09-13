for file in ./*
do
convert $file -resize 8x8 ./8x8/$file
convert $file -resize 16x16 ./16x16/$file
convert $file -resize 32x32 ./32x32/$file
convert $file -resize 64x64 ./64x64/$file

done