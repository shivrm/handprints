regen:
	cp bg.png out.png

print:
	magick out.png \( mask.png -channel RGBA -fill Red -colorize 100% -repage +100+100 \) -flatten out.png


gen:
	magick bg.png \( +clone -fill "gray(10%)" -colorize 100 \) -alpha off -compose copy_opacity -composite overlay.png

fade:
	magick out.png overlay.png -flatten out.png
