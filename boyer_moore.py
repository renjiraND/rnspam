def bmMatch(text, pattern) :
    last = buildLast(text,pattern)
    n = len(text)
    m = len(pattern)
    i = m-1

    if (i > n-1) :
        return -1
    j = m-1
    if (pattern[j] == text[i]) :
        if (j==0) :
            return i
        else :
            i -= 1
            j -= 1
    else :
        lo = last[text[i]]
        i = i+m- min(j, 1+lo)
        j = m-1
    while (i <= n-1) :
        if (pattern[j] == text[i]) :
            if (j==0) :
                return i
            else :
                i -= 1
                j -= 1
        else :
            lo = last[text[i]]
            i = i+m- min(j, 1+lo)
            j = m-1
    return -1

def buildLast(text, pattern) :
    last = {}
    for i in range(len(text)):
        last[text[i]] = -1;

    for i in range(len(pattern)) :
        last[pattern[i]] = i
    return last
