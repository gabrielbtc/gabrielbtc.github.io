function _wget() { curl "${1}" -o $(basename "${1}") ; };
alias wget='_wget'

files=( 20000001 20000011 20000021 20001528  )
count=0
start=http://cdn.s3.gsnarutodash.narucole.jp/asset/master/gui___gui_cha_card___
end=".png"

for i in ${files[@]} {
do
    char=$i
    filename=($start$char$end)
    _wget $filename
    let count++
done