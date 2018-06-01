<?php
// DriveGrabber class
require_once(__DIR__ .'/drive_grabber.php');

$drive = new DriveGrabber();
$videoUrl = $drive->getDownloadLink('1xMFCePF71Y0F1oP9GqWt1DBTJ1c_daa0');
?>
<?php include ('header.php'); ?>
		<?php if ($videoUrl != null): ?>
		<video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
		 preload="auto" poster="MY_VIDEO_POSTER.jpg"
		 data-setup="{}">
		 <source src="<?php echo $videoUrl ?>" type='video/mp4'>
		 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>
		<?php else: ?>
		<?php endif; ?>

<?php include ('footer.php'); ?>