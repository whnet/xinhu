<?php
class assetmClassAction extends Action
{
	public function printewmAction()
	{
		$sid = c('check')->onlynumber($this->get('sid'));
		$rows= m('assetm')->getall('id in('.$sid.')');
		
		foreach($rows as $k=>$rs){
			$rows[$k]['url'] = $this->jm->base64encode('task.php?a=x&num=assetm&mid='.$rs['id'].'');
		}

		$this->assign('rows', $rows);
	}
}