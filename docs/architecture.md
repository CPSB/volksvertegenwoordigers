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
    - (Class) Documenten
    - (Class) Euro
    - (Class) Hoorzitting 
    - (Class) JournaalLijn
    - (Class) Legislaturen
    
    - (Class) ParlementaireInitiatieven
        - (Function) initiatievenlijst($id)
        - (Function) initiatief($id)
    
    - (Class) SchrijftelijkeVraag
        - (Function) lijst($ids)
        - (Function) schriftelijkeVraag($idSchv)
        
    - (Class) Statistieken
    - (Class) Vergaderingen
```
