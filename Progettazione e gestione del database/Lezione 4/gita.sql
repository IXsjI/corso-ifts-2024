select g.nome as genitore
        ,f.nome as prole
		,g.id_gita_genitori_figli
		,g.master
		,f.id_gita_genitori_figli
		,f.master
from id_gita_genitori_figli as g
  -- scelgo la inner perchè così non mi considera chi non ha figli, ovvero i figli
  -- associo ai genitori i propri figli, ovvero chi ha il campo f.master =  fid_genitori
inner join id_gita_genitori_figli as f on  f.master = g.id_gita_genitori_figli
  -- escludo i genitori, ovvero chi ha lo stesso id sia come padre che come figlio
				and g.id_gita_genitori_figli <> f.id_gita_genitori_figli 
