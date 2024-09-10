import java.math.BigDecimal;

public class Medidas {
    float cent;
    float mm;
    float poleg;
    float pe;
    float jarda;
    BigDecimal milha;

    void converter() {
        mm = cent * 10;
        poleg = (float) (mm / 25.3995);
        pe = poleg / 12;
        jarda = pe / 3;
        milha = new BigDecimal(jarda / 1760);
    }
}
