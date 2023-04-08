class Solution(object):
    def longestCommonPrefix(self,strs):
        if "" in strs or strs == []:
            return ""
        prefix = strs[0]
        for i in range(1,len(strs)):
            while(prefix != ""):
                try:
                    if str.index(str(strs[i]),prefix) == 0:
                        break
                    else:
                        prefix = prefix[:-1]
                except:
                    prefix = prefix[:-1]
        return prefix
