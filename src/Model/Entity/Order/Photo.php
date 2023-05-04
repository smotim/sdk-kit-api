<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Photo
{

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("data")
     */
    public $data;


    public function saveFilePhoto($path = null, $file_name = null): bool
    {
        if (!$this->data) {
            return false;
        }
        $file_name = $file_name ?: 'Фото груза';
        $path = $path ?: __DIR__;
        $fullName = $this->safe_file(sprintf('%s' . DIRECTORY_SEPARATOR . '%s.jpg',$path, $file_name));
        $ifp = fopen($fullName, 'wb' );
        if (fwrite($ifp, base64_decode($this->data)) !== false) {
            fclose($ifp);
            return true;
        }
        fclose($ifp);
        return false;
    }

    private function safe_file(string $filename): string
    {
        $dir = dirname($filename);
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $info = pathinfo($filename);
        $name = $dir . '/' . $info['filename'];
        $prefix = '';
        $ext = (empty($info['extension'])) ? '' : '.' . $info['extension'];

        if (is_file($name . $ext)) {
            $i = 1;
            $prefix = '_' . $i;
            while (is_file($name . $prefix . $ext)) {
                $prefix = '_' . ++$i;
            }
        }

        return $name . $prefix . $ext;
    }
}