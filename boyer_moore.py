def bmMatch(text, pattern) :
    last = buildLast(pattern)
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
        lo = last[ord(text[i])]
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
            lo = last[ord(text[i])]
            i = i+m- min(j, 1+lo)
            j = m-1
    return -1

def buildLast(pattern) :
    last = [-1 for x in range (16777216)]
    for i in range(len(pattern)) :
        last[ord(pattern[i])] = i
    return last
