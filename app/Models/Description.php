<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Description
 */
class Description extends Model
{
    protected $table = 'description';

    protected $primaryKey = 'id';

	public $timestamps = false;

    protected $fillable = [
        'color',
        'size',
        'resolution',
        'ram',
        'cpu',
        'sdcard',
        'ssd',
        'hdd',
        'screen_size',
        'camera_before',
        'camera_after',
        'os',
        'strorage',
        'wifi',
        '2g',
        '3g',
        '4g',
        'sim_number',
        'sim_type',
        'gps',
        'bluetooth',
        'nfc',
        'battery',
        'battery_size',
        'more',
        'headphone',
        'headphone_type',
        'radio',
        'recocde',
        'connect_extends',
        'camera_flash',
        'monitor',
        'usb2',
        'usb3',
        'vga_onboard',
        'monitor_output',
        'monitor_input',
        'sound',
        'bus',
        'vga_extends',
        'dvd',
        'weight'
    ];

    protected $guarded = [];


}