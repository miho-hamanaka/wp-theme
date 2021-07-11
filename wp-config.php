<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp-theme' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TloJTwOru^x^J<Azn1m-[foQ>eu~R.#NO5/;^:j.D`Y7M_.&:PND$3a&3^;s1.;6' );
define( 'SECURE_AUTH_KEY',  'hVm|h~AW_o/}|yZ*MtD!_KKH>lZ.xn&VJpK=}I_egE&GUaleGIk3hw+jFgPbDdQu' );
define( 'LOGGED_IN_KEY',    'IzqHRLqFArTWq:LyCIQ+^$!vv/7Xk=Qs}<I4d+][;,oFmctj)x~K647s#gK2L/q#' );
define( 'NONCE_KEY',        '86Cq&yz_XjD7$>{L?oz!88dW(Q_4jwu9x_!z@xm0=VI@VWG2T@thb#4xZ9{h!i&?' );
define( 'AUTH_SALT',        '(dA+d^q.T ;g_Eq3Lt2Kw}7`$EO=5zO!% -M|4QnxH*{%atP<r]es(l?|sP6Xy>A' );
define( 'SECURE_AUTH_SALT', '!2-PM4[uKd|eyPAp ~}&zpqy+tI,Lo3R.#=gmGO2uSkgWxIZmvK:F[.ExZEHI$GX' );
define( 'LOGGED_IN_SALT',   'UT0FTPVl@rHO2qHU6p.`(iY.;,Wwl9C3X0@,bLxE>n0wuR*~R$bU@vX@`H^{J+}P' );
define( 'NONCE_SALT',       'GRno|+Z9:%x[*PBkCk^M@q^KZVNow{]:M?7I[Qp9kAawU]~&*1h{B~~{i_!rHrLB' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
