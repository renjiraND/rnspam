def bm_match(text, pattern):
    result = []
    m = len(pattern)
    n = len(text)
    last = initialized(text, n)
    last = buildLast(last, pattern, m)
    s = 0
    while(s <= n-m):
        j = m-1
        while j>=0 and pattern[j] == text[s+j]:
            j -= 1
        if j<0:
            result.append(s)
            s += (m-last[text[s+m]] if s+m<n else 1)
        else:
            s += max(1, j-last[text[s+j]])
    return result

def initialized(text, size):
    last = {}
    for i in range(size):
        last[text[i]] = -1;
    return last;

def buildLast(last, pattern, size):
    for i in range(size):
        last[pattern[i]] = i;
    return last
