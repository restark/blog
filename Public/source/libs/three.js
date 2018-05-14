define(['math'],function (math) {
    var sum = function (x,y,z) {
        return math.sum(x,y) + z;
    };
    return {
        sum : sum
    }
})
