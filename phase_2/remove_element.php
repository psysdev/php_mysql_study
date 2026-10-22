class Solution {
    function removeElement(&$nums, $val) {
        $k = 0;

        for ($n = 0; $n < count($nums); $n++) {
            if ($nums[$n] != $val) {
                $nums[$k] = $nums[$n];
                $k++;
            }
        }

        return $k;
    }
}