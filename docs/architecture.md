# Programmatie schema

```
(Base) API Wrapper:

    - (Class) Commissie
        - (Function) huidige()
        - (Function) legislatuur($legistlatuur)
        - (Function) lijst($commissieIds)
        - (Function) vorige()
        - (Function) commissieBijId($comissieId, $datum)
        - (Function) comissieAdreslijst($commissieId)
        - (Function) commissieAlletvz($commissieId)
        - (Function) standVanZaken($commissieId, $status)
        - (Function) verslagen($commissieId)
        - (Function) VergaderingGepland(§$commissieId)
    
    - (Class) Debat
        - (Function) debatLijst($debatId)
        - (Function) debatBijId($debatId)
    
    - (Class) Documenten
        - (Function) vind($documentId)
    
    - (Class) Euro
        - (Function) lijst($euroId) 
        - (Function) zoekDossier($dossierId)
        
    - (Class) Hoorzitting 
        - (Function) lijst($id)
        - (Function) vindOpId($idHG)
    
    - (Class) JournaalLijn
        - (Function) vind($id)
        
    - (Class) Legislaturen
        - (Function) alle()
    
    - (Class) ParlementaireInitiatieven
        - (Function) initiatievenlijst($id)
        - (Function) initiatief($id)
    
    - (Class) SchrijftelijkeVraag
        - (Function) lijst($ids)
        - (Function) schriftelijkeVraag($idSchv)
        
    - (Class) Statistieken
        - (Function) getStatistieken($id, $zittingsjaar)
        
    - (Class) Vergaderingen
        - (Function) bezig($status, $commId)
        - (Function) komende($type, $commId)
        - (Function) lijst($id)
        - (Function) zoekVolledig()
        - (Function) vorige()
        - (Function) vindOpId()
        - (Function) vergaderingAgenda()
        - (Function) zoek() 
        - (Function) vergaderingHandelingen($vergId, $highlight)
        
    - (Class) Volksvertegenwoordigers
        - (Function) adreslijst()
        - (Function) bureau() 
        - (Function) gewezen()
        - (Function) huidige() 
        - (Function) lijst()
        - (Function) bureauUitgebreid() 
        - (Function) persoon($id)
```
