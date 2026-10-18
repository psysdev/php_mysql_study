class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $left = 0;
        $right = count($nums)-1;
        while($left <= $right){
            $mid = (int) floor(($left+$right)/2);
            if ($nums[$mid] == $target){
                return $mid;
            }
            if ($target < $nums[$mid]){
                $right = $mid-1;
            }
            if ($target>$nums[$mid]){
                $left = $mid+1;
            } 
        }
        return -1;
    }
}