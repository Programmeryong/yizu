<?php
namespace Home\Model;
use Think\Model;
class SiteModel extends Model {
	/**
	 * 
	 * @return [array] $site       	返回数组 
	 */
	public function siteErgodic()
	{
		$site1 = M('site')->field('id,site_name,metro_id')->where('metro_id=1')->select();
		$site2 = M('site')->field('id,site_name,metro_id')->where('metro_id=2')->select();
		$site3 = M('site')->field('id,site_name,metro_id')->where('metro_id=3')->select();
		$site4 = M('site')->field('id,site_name,metro_id')->where('metro_id=4')->select();
		$site5 = M('site')->field('id,site_name,metro_id')->where('metro_id=5')->select();
		$site6 = M('site')->field('id,site_name,metro_id')->where('metro_id=6')->select();
		$site7 = M('site')->field('id,site_name,metro_id')->where('metro_id=7')->select();
		$site8 = M('site')->field('id,site_name,metro_id')->where('metro_id=8')->select();
		$site9 = M('site')->field('id,site_name,metro_id')->where('metro_id=9')->select();
		$site10 = M('site')->field('id,site_name,metro_id')->where('metro_id=10')->select();
		$site11 = M('site')->field('id,site_name,metro_id')->where('metro_id=11')->select();
		$site12 = M('site')->field('id,site_name,metro_id')->where('metro_id=12')->select();
		$site13 = M('site')->field('id,site_name,metro_id')->where('metro_id=13')->select();
		$site14 = M('site')->field('id,site_name,metro_id')->where('metro_id=14')->select();
		$site = array('site1' => $site1,'site2' => $site2,'site3' => $site3,'site4' => $site4,'site5' => $site5,'site6'=>$site6,'site7' => $site7,'site8' => $site8, 'site9' => $site9,'site10' => $site10,'site11' => $site11,'site12' => $site12,'site13' => $site13,'site14' => $site14);
		return $site;
	}
}