function solve(s,k){
	let letters = "abcdefghijklmnopqrstuvwxyz"
	let ersd = 0
	for (let i=0; i < letters.length && ersd < k; i++){
		while (s.includes(letters[i]) && ersd < k){
			s = s.replace(letters[i], '')
			ersd +=1
		}
	}
	return s
}
