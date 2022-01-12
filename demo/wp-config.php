<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'demo' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N:T/eqm`{lm-X7RDdDG<z=fv#hiRI!&#94A)@Pw46+|p{+R0;ZmAq#f&%D[kZ-rJ' );
define( 'SECURE_AUTH_KEY',  '5O]/ioX;fD-i`x]yRZ/:16E4Q y1z<ww!.8[Pl8cZ)asy&F@oAd`/yMxOS4QqdF8' );
define( 'LOGGED_IN_KEY',    '(k@DX@^x8x0NC6V~9868&[zrg}g`}Tf|X3#Ev%$R}dk5oxG9Nf{g&dNu[lkl VT ' );
define( 'NONCE_KEY',        'b).e.2gRD*@anf}@>+$fo!WG6TM,Y#Q^!>/0q0|wOe+6*?#Q]o3>B&|q z#UIdK*' );
define( 'AUTH_SALT',        'sAhTI!?$?Ecy{K2{PFH=,H*4~D,Mr7/n2!K~L|:~;)%RCsS$w2GERWg?O|^~E-]/' );
define( 'SECURE_AUTH_SALT', '!v AoP6`K-SQ9q0/H7os<qG#9T8])Y<<e(86|3BW)gO&`j/LUHX*P;#upa2ZRHab' );
define( 'LOGGED_IN_SALT',   '}!(;IX?xgu1k_gCY<^hkj?&wexok{b;-yMz`xyib0SDgMOzUiF9:x]i@mutYs&Sl' );
define( 'NONCE_SALT',       '%s.lkuTkU;y/M<gnQ.H>%R%m:JGuD-Z<B06iA#w9Ys+O)f.CP7QLm 8<XXGF%a*`' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
