import re

def regexMatch(text, pattern):
    p = re.compile(pattern, re.IGNORECASE)
    result = p.search(text)
    if (result == None):
        return -1
    else:
        return result.span()[0]
