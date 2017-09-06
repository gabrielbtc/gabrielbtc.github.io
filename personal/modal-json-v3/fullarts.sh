files=( 20000001 20000011 20000021  )
count=0
start=http://cdn.s3.gsnarutodash.narucole.jp/asset/master/gui___gui_cha_card___
end=".png"

for i in ${files[@]} {
do
    char=$i
    filename=($start$char$end)
    wget $filename
    let count++
done