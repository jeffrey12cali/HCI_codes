function solve(s, k){
    let j = 0;
    let flag = false;
    let ascii = 97;
    while (j < k){
        flag = false;
        for (let i = 0; i < s.length; i++){
            if (ascii == s.charCodeAt(i))
                flag = true;
                s = s.replace(s[i],'');
        }
        if (flag == true)
            j += 1;
        ascii += 1;
    }
    return s;
}
